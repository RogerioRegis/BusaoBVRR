<?php

namespace Busao\Service;

use Doctrine\ORM\EntityManager;

class Araceli extends AbstractService {

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = "Busao\Entity\Araceli";
    }

}