<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInputText(),
      'username' => new sfWidgetFormInputText(),
      'email'    => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputText(),
      'level'    => new sfWidgetFormChoice(array('choices' => array('administrador' => 'administrador'))),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 100)),
      'username' => new sfValidatorString(array('max_length' => 50)),
      'email'    => new sfValidatorString(array('max_length' => 100)),
      'password' => new sfValidatorString(array('max_length' => 40)),
      'level'    => new sfValidatorChoice(array('choices' => array(0 => 'administrador'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'User', 'column' => array('username')))
    );

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
