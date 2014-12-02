<?php

namespace Busao\Form;

use Zend\Form\Form;

class Araceli extends Form {

    public function __construct($name = null) {
        parent::__construct('araceli');

        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'id',
            'attibutes' => array(
                'type' => 'hidden'
            )
        ));

        $this->add(array(
            'name' => 'araceli_saida_bairro_uteis',
            'options' => array(
                'type' => 'text',
                'label' => 'Hora de Saída do Centro'
            ),
            'attributes' => array(
                'id' => 'nome',
                'class' => 'form-control',
                'placeholder' => ''
            )
        ));
        
        $this->add(array(
            'name' => 'araceli_saida_centro_uteis',
            'options' => array(
                'type' => 'text',
                'label' => 'Hora de Sáida do Bairro'
            ),
            'attributes' => array(
                'id' => 'nome',
                'class' => 'form-control',
                'placeholder' => ''
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
