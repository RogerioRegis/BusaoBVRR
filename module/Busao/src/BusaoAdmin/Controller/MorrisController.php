<?php

namespace BusaoAdmin\Controller;
  
class MorrisController extends CrudController {
    
    public function __construct() {
        $this->entity = "Busao\Entity\Categoria";
        $this->form = "BusaoAdmin\Form\Categoria";
        $this->service = "Busao\Service\Categoria";
        $this->controller = "morris";
        $this->route = "busao-admin";
    }
    
}