<?php

/**
 * User form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm
{
    public function configure()
    {
        $this->widgetSchema['level']    = new sfWidgetFormChoice(array('choices' => array('' => 'Selecione', 'administrador' => 'Administrador')));
        $this->widgetSchema['password'] = new sfWidgetFormInputPassword();

        $this->validatorSchema['password'] = new sfValidatorString(array('required' => true, 'min_length' => 6));
        $this->validatorSchema['email']    = new sfValidatorEmail(array('required' => true));
    }
}
