<?php

/**
 * Usuario form.
 *
 * @package    form
 * @subpackage Usuario
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class BackendLoginForm extends sfForm
{
    public function configure()
    {
        parent::configure();

        $this->setWidgets(array(
            'usuario'    => new sfWidgetFormInput(),
            'senha'      => new sfWidgetFormInputPassword(),
        ));

        $this->widgetSchema->setLabels(array(
            'usuario' => 'Usuário',
        ));

        $this->validatorSchema['usuario'] = new sfValidatorString(array('required'=>true),array('required'=>'Requirido'));
        $this->validatorSchema['senha'] = new sfValidatorString(array('required'=>true),array('required'=>'Requirido'));

        $this->widgetSchema->setNameFormat('login[%s]');
        $this->validatorSchema->setPostValidator(new swLoginValidator());
    }

}