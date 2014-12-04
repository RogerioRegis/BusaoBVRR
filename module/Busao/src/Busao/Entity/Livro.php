<?php

namespace Busao\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="livros")
 * @ORM\Entity(repositoryClass="Busao\Entity\LivroRepository")
 */
class Livro {

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
     * @ORM\ManyToOne(targetEntity="Busao\Entity\Categoria", inversedBy="livro")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    protected $categoria;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $autor;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $isbn;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $saida_bairro_sabado;

    public function __construct($options = null) {
        Configurator::configure($this, $options);
    }

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

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function getSaida_bairro_sabado() {
        return $this->saida_bairro_sabado;
    }

    public function setSaida_bairro_sabado($saida_bairro_sabado) {
        $this->saida_bairro_sabado = $saida_bairro_sabado;
    }

    public function toArray() {
        return array(
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'autor' => $this->getAutor(),
            'saida_bairro_sabado' => $this->getSaida_bairro_sabado(),
            'isbn' => $this->getIsbn(),
            'categoria' => $this->getCategoria()->getId()
        );
    }

}
