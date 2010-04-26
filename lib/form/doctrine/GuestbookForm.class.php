<?php

/**
 * Guestbook form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GuestbookForm extends BaseGuestbookForm
{
    public function configure()
    {
        unset(
            $this['created_at'],
            $this['updated_at'],
            $this['approved']
        );
        
        $this->widgetSchema['captcha'] = new sfAnotherWidgetFormReCaptcha();
        
        $this->widgetSchema->setLabels(array(
            'name'      => 'Nome',
            'email'     => 'E-mail', 
            'city'      => 'Cidade', 
            'state'     => 'Estado', 
            'country'   => 'País', 
            'comment'   => 'Comentário', 
            'captcha'   => 'Digite as palavras abaixo', 
        ));
        
        $this->validatorSchema->setPostValidator(
            new sfAnotherValidatorSchemaReCaptcha($this, 'captcha')
        );

        
        //parent::configure();
    } 
}
