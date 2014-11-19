<?php

namespace BusaoAdmin\Controller;

class WidgetsController extends CrudController {

    public function __construct() {
        $this->entity = "Busao\Entity\Categoria";
        $this->form = "BusaoAdmin\Form\Categoria";
        $this->service = "Busao\Service\Categoria";
        $this->controller = "widgets";
        $this->route = "busao-admin";
    }

//    public function indexAction() {
//
//        return new ViewModel(array());
//    }

}
