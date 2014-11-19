<?php

namespace Busao\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rota")
 * @ORM\Entity(repositoryClass="Busao\Entity\CategoriaRepository")
 */
class Rota {

    public function __construct($options = null) {
        Configurator::configure($this, $options);
//        $this->livros = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $numero;

    /**
     * @ORM\OneToMany(targetEntity="Busao\Entity\Linha", mappedBy="rota")
     */
    protected $linha;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->numero;
    }

    public function setNome($nome) {
        $this->numero = $numero;
    }

    public function __toString() {
        return $this->numero;
    }

    public function getLivros() {
        return $this->linha;
    }

    public function toArray() {
        return array('id' => $this->getId(), 'numero' => $this->getNumero());
    }

}
