<?php

namespace Busao\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {

        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $repo = $em->getRepository('Busao\Entity\Categoria');
        
        $categorias = $repo->findBy(array(), array('nome'=>'asc'));

        return new ViewModel(array('categorias' => $categorias));
    }

}
