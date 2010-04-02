<?php

/**
 * Guestbook form base class.
 *
 * @method Guestbook getObject() Returns the current form's model object
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGuestbookForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'city'       => new sfWidgetFormInputText(),
      'state'      => new sfWidgetFormInputText(),
      'country'    => new sfWidgetFormInputText(),
      'comment'    => new sfWidgetFormTextarea(),
      'approved'   => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 150)),
      'email'      => new sfValidatorString(array('max_length' => 100)),
      'city'       => new sfValidatorString(array('max_length' => 100)),
      'state'      => new sfValidatorString(array('max_length' => 2)),
      'country'    => new sfValidatorString(array('max_length' => 50)),
      'comment'    => new sfValidatorString(),
      'approved'   => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('guestbook[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Guestbook';
  }

}
