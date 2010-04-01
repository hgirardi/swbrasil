<?php

/**
 * User filter form base class.
 *
 * @package    swbrasil
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'level'    => new sfWidgetFormChoice(array('choices' => array('' => '', 'administrador' => 'administrador'))),
    ));

    $this->setValidators(array(
      'name'     => new sfValidatorPass(array('required' => false)),
      'username' => new sfValidatorPass(array('required' => false)),
      'email'    => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
      'level'    => new sfValidatorChoice(array('required' => false, 'choices' => array('administrador' => 'administrador'))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'name'     => 'Text',
      'username' => 'Text',
      'email'    => 'Text',
      'password' => 'Text',
      'level'    => 'Enum',
    );
  }
}
