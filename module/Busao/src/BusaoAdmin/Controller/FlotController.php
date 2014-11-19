<?php

namespace BusaoAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FlotController extends AbstractActionController {

    public function indexAction() {

        return new ViewModel(array());
    }

}