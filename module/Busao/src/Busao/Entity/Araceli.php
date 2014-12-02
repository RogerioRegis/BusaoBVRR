<?php

namespace Busao\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="araceli")
 * @ORM\Entity(repositoryClass="Busao\Entity\AraceliRepository")
 */
class Araceli {

    public function __construct($options = null) {
        Configurator::configure($this, $options);
        $this->livros = new ArrayCollection();
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
    protected $nome;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $araceli_saida_bairro_uteis;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $araceli_saida_centro_uteis;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getAraceli_saida_bairro_uteis() {
        return $this->araceli_saida_bairro_uteis;
    }
    public function setAraceli_saida_bairro_uteis($araceli_saida_bairro_uteis) {
        $this->araceli_saida_bairro_uteis = $araceli_saida_bairro_uteis;
    }
    
    public function getAraceli_saida_centro_uteis() {
        return $this->araceli_saida_centro_uteis;
    }
    public function setAraceli_saida_centro_uteis($araceli_saida_centro_uteis) {
        $this->araceli_saida_centro_uteis = $araceli_saida_centro_uteis;
    }

    public function toArray() {
        return array(
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'araceli_saida_bairro_uteis' => $this->getAraceli_saida_bairro_uteis(),
            'araceli_saida_centro_uteis' => $this->getAraceli_saida_centro_uteis(),
        );
    }

}