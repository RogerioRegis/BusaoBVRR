<?php

namespace BusaoAdmin\Form;

use Zend\Form\Form,
    Zend\Form\Element\Select;

class Livro extends Form {

    protected $categorias;

    public function __construct($name = null, array $categorias = null) {
        parent::__construct('livro');
        $this->categorias = $categorias;

        $this->setAttribute('method', 'post');
//        $this->setInputFilter(new LivroFilter);

        $this->add(array(
            'name' => 'id',
            'attibutes' => array(
                'type' => 'hidden'
            )
        ));

        $this->add(array(
            'name' => 'nome',
            'options' => array(
                'type' => 'text',
                'label' => 'Nome'
            ),
            'attributes' => array(
                'id' => 'nome',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Entre com o nome'
            )
        ));

        $categoria = new Select();
        $categoria->setLabel("Categoria")
                ->setName("categoria")
                ->setAttribute('id', 'categoria')
                ->setAttribute('class', 'form-control')
                ->setOptions(array('value_options' => $this->categorias)
        );
        $this->add($categoria);

        $this->add(array(
            'name' => 'autor',
            'options' => array(
                'type' => 'text',
                'label' => 'Autor'
            ),
            'attributes' => array(
                'id' => 'autor',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Entre com o autor'
            ),
        ));

        $this->add(array(
            'name' => 'valor',
            'options' => array(
                'type' => 'number',
                'label' => 'Valor R$'
            ),
            'attributes' => array(
                'id' => 'valor',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Entre com o Valor'
            ),
        ));

        $this->add(array(
            'name' => 'isbn',
            'options' => array(
                'type' => 'text',
                'label' => 'ISBN'
            ),
            'attributes' => array(
                'id' => 'isbn',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Entre com o ISBN'
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn btn-success btn-block'
            )
        ));
    }

}
