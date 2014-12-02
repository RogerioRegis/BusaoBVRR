<?php

namespace Busao\Service;

use Doctrine\ORM\EntityManager;
use Busao\Entity\Configurator;

class Livro extends AbstractService {

    public function __construct(EntityManager $em) {
        parent::__construct($em);
        $this->entity = "Busao\Entity\Livro";
    }

    public function insert(array $data) {
        $entity = new $this->entity($data);

        $categoria = $this->em->getReference("Busao\Entity\Categoria", $data['categoria']);
        $entity->setCategoria($categoria);

        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

    public function update(array $data) {
        $entity = $this->em->getReference($this->entity, $data['id']);
        $entity = Configurator::configure($entity, $data);

        $categoria = $this->em->getReference("Busao\Entity\Categoria", $data['categoria']);
        $entity->setCategoria($categoria);

        $this->em->persist($entity);
        $this->em->flush();

        return $entity;
    }

}
