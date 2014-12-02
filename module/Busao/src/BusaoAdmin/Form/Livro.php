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
                'label' => 'Linha'
            ),
            'attributes' => array(
                'id' => 'nome',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Número da Linha'
            )
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
            'name' => 'autor',
            'options' => array(
                'type' => 'text',
                'label' => 'Autor'
            ),
            'attributes' => array(
                'id' => 'autor',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Nome do Autor'
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
                'placeholder' => 'Ex: 99,99'
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
                'placeholder' => 'Ex: 99-9'
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
