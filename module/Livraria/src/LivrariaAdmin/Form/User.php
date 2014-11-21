<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class User extends Form {

    public function __construct($name = null) {
        parent::__construct('user');

        $this->setAttribute('method', 'post');
        $this->setInputFilter(new CategoriaFilter);

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
                'placeholder' => 'Entre com o nome'
            )
        ));

        $this->add(array(
            'name' => 'email',
            'options' => array(
                'type' => 'email',
                'label' => 'Email'
            ),
            'attributes' => array(
                'id' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Entre com o Email'
            )
        ));

        $this->add(array(
            'name' => 'password',
            'options' => array(
                'type' => 'password',
                'label' => 'Senha'
            ),
            'attributes' => array(
                'id' => 'password',
                'class' => 'form-control',
                'type' => 'password',
            )
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
