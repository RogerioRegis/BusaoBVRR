<?php

namespace BusaoAdmin\Controller;

use Zend\View\Model\ViewModel;

class LivrosController extends CrudController {

    public function __construct() {
        $this->entity = "Busao\Entity\Livro";
        $this->form = "BusaoAdmin\Form\Livro";
        $this->service = "Busao\Service\Livro";
        $this->controller = "livros";
        $this->route = "busao-admin";
    }
    
//    public function newAction() {
//        $form = $this->getServiceLocator()->get($this->form);
//        $request = $this->getRequest();
//
//        if ($request->isPost()) {
//            $form->setData($request->getPost());
//            if ($form->isValid()) {
//                $service = $this->getServiceLocator()->get($this->service);
//                $service->insert($request->getPost()->toArray());
//
//                return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
//            }
//        }
//
//        return new ViewModel(array('form' => $form));
//    }
//
//   public function editAction() {
//        $form = $this->getServiceLocator()->get($this->form);
//
//        $request = $this->getRequest();
//
//        $repository = $this->getEm()->getRepository($this->entity);
//        $entity = $repository->find($this->params()->fromRoute('id', 0));
//
//        if ($this->params()->fromRoute('id', 0)) {
//            $form->setData($entity->toArray());
//        }
//
//        if ($request->isPost()) {
//            $form->setData($request->getPost());
//            if ($form->isValid()) {
//                $service = $this->getServiceLocator()->get($this->service);
//                $service->update($request->getPost()->toArray());
//
//                return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
//            }
//        }
//
//        return new ViewModel(array('form' => $form));
//    }

}