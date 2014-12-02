<?php

namespace Busao\Entity;

use Doctrine\ORM\EntityRepository;

class AraceliRepository extends EntityRepository {

    public function fetchPairs() {
        
        $entities = $this->findAll();
        $array = array();

        foreach ($entities as $entity) {
            $array[$entity->getId()] = $entity->getNome();
            $array[$entity->getId()] = $entity->getAraceli_saida_bairro_uteis();
            $array[$entity->getId()] = $entity->getAraceli_saida_centro_uteis();
        }

        return $array;
    }

}
