<?php

namespace Busao\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Busao\Form\Araceli as FrmAraceli;

class AraceliController extends AbstractActionController {
    
    public function __construct() {
        $this->entity = "Busao\Entity\Araceli";
        $this->form = "Busao\Form\Araceli";
        $this->service = "Busao\Service\Araceli";
        $this->controller = "araceli";
        $this->route = "busao-admin";
    }
    
    public function indexAction() {

        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $repo = $em->getRepository('Busao\Entity\Araceli');
//      $araceli = $repo->findBy(array(), array('nome' => 'asc'));
        $araceli = $repo->findAll();

        return new ViewModel(array('araceli' => $araceli));
    }

    public function newAction() {
        $form = new FrmAraceli();
        
        $request = $this->getRequest();

        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $service = $this->getServiceLocator()->get('Busao\Service\Araceli');
                $service->insert($request->getPost()->toArray());

                return $this->redirect()->toRoute('busao-admin', array('controller' => 'araceli'));
            }
        }

        return new ViewModel(array('form' => $form));
    }

    public function editAction() {
        $form = new FrmAraceli();
        $request = $this->getRequest();

        $repository = $this->getEm()->getRepository('Busao\Service\Araceli');
        $entity = $repository->find($this->params()->fromRoute('id', 0));

        if ($this->params()->fromRoute('id', 0))
            $form->setData($entity->toArray());

        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $service = $this->getServiceLocator()->get($this->service);
                $service->update($request->getPost()->toArray());

                return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
            }
        }

        return new ViewModel(array('form' => $form));
    }

    public function deleteAction() {
        $service = $this->getServiceLocator()->get($this->service);
        if ($service->delete($this->params()->fromRoute('id', 0)))
            return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
    }

    /*
     * @return EntityManager
     */

    protected function getEm() {
        if (null === $this->em)
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        return $this->em;
    }

}
