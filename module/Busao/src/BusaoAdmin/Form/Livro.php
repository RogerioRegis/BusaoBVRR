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
        #$this->setInputFilter(new LivroFilter);

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
                'label' => 'Saída CENTRO'
            ),
            'attributes' => array(
                'id' => 'nome',
                'class' => 'form-control',
                'required' => FALSE,
                'placeholder' => 'Hora de Saída'
            )
        ));

        $this->add(array(
            'name' => 'autor',
            'options' => array(
                'type' => 'text',
                'label' => 'Saída BAIRRO'
            ),
            'attributes' => array(
                'id' => 'autor',
                'class' => 'form-control',
                'required' => FALSE,
                'placeholder' => 'Hora de Saída'
            ),
        ));

        $this->add(array(
            'name' => 'saida_bairro_sabado',
            'options' => array(
                'type' => 'text',
                'label' => 'Saída CENTRO'
            ),
            'attributes' => array(
                'id' => 'saida_bairro_sabado',
                'class' => 'form-control',
                'required' => FALSE,
                'placeholder' => 'Hora de Saída'
            ),
        ));

        $this->add(array(
            'name' => 'isbn',
            'options' => array(
                'type' => 'text',
                'label' => 'Saída BAIRRO'
            ),
            'attributes' => array(
                'id' => 'isbn',
                'class' => 'form-control',
                'required' => FALSE,
                'placeholder' => 'Hora de Saída'
            ),
        ));

        $categoria = new Select();
        $categoria->setLabel("Rota")
                ->setName("categoria")
                ->setAttribute('id', 'categoria')
                ->setAttribute('class', 'form-control')
                ->setOptions(array('value_options' => $this->categorias)
        );
        $this->add($categoria);

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
