<?php

/**
 * Partner filter form base class.
 *
 * @package    swbrasil
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePartnerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'path' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name' => new sfValidatorPass(array('required' => false)),
      'url'  => new sfValidatorPass(array('required' => false)),
      'path' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('partner_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Partner';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'name' => 'Text',
      'url'  => 'Text',
      'path' => 'Text',
    );
  }
}
