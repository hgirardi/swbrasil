<?php

/**
 * Link form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LinkForm extends BaseLinkForm
{
    public function configure()
    {
        $this->validatorSchema['url'] = new sfValidatorUrl(array('required' => true));
    }
}
