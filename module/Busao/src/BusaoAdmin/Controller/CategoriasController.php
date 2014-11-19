<?php

namespace BusaoAdmin\Controller;
  
class CategoriasController extends CrudController {
    
    public function __construct() {
        $this->entity = "Busao\Entity\Categoria";
        $this->form = "BusaoAdmin\Form\Categoria";
        $this->service = "Busao\Service\Categoria";
        $this->controller = "categorias";
        $this->route = "busao-admin";
    }
    
}
