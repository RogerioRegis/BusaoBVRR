<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class User extends Form {
    
    public function __construct($name = null) {
        parent::__construct('user');
        
        $this->setAttribute('method', 'post');
        #$this->setInputFilter(new CategoriaFilter);
        
        $this->add(array(
           'name' =>'id',
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
                'placeholder' => 'Entre com o email'
            )
        ));
        $this->add(array(
           'name' => 'password',
            'options' => array(
                'type' => 'Password',
                'label' => 'Senha'
            ),
            'attributes' => array(
                'type' => 'password'
            )
        ));
        
        $this->add(array(
           'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn-success'
            )
        ));
    }
}
