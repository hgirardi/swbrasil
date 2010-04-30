<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContatoFormclass
 *
 * @author hboaventura
 */
class ContactForm extends sfForm
{
    public function configure()
    {
        parent::configure();
        $this->setWidgets(array(
            'nome'     => new sfWidgetFormInput(),
            'email'    => new sfWidgetFormInput(),
            'telefone' => new sfWidgetFormInput(),
            'mensagem' => new sfWidgetFormTextarea(),
            'captcha'  => new sfAnotherWidgetFormReCaptcha()
        ));
        
        $this->widgetSchema->setLabels(array(
            'nome'     => 'Nome',
            'email'    => 'E-mail',
            'telefone' => 'Telefone',
            'mensagem' => 'Mensagem',
            'captcha'  => 'Digite as palavras abaixo', 
        ));

        $this->setValidators(array(
            'nome'     => new sfValidatorString(),
            'email'    => new sfValidatorEmail(),
            'telefone' => new sfValidatorString(array('required' => false)),
            'mensagem' => new sfValidatorString(array('min_length' => 4)),
        ));

        $this->widgetSchema->setNameFormat('contact[%s]');

        $this->validatorSchema->setPostValidator(
            new sfAnotherValidatorSchemaReCaptcha($this, 'captcha')
        );
    
    }
}
?>
