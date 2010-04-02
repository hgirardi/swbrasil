<?php

/**
 * Professional form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProfessionalForm extends BaseProfessionalForm
{
    public function configure()
    {
        unset(
            $this['created_at'],
            $this['updated_at']
        );

        $this->validatorSchema['email'] = new sfValidatorEmail();

        $this->useFields(array(
            'name',
            'speciality',
            'email',
            'address'
        ));
    }
}
