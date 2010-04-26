<?php

/**
 * contact actions.
 *
 * @package    swbrasil
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->form = new ContactForm();
        
        $this->getUser()->setFlash('success', false);
        $this->getUser()->setFlash('error', false);
        
        if($request->getMethod() == 'POST'){
            $this->form->bind(
                $request->getParameter('contact')
            );

            if ($this->form->isValid()){
                
                $contact = $request->getParameter('contact');
                
                // send an email to the affiliate
                
                $message = $this->getMailer()->compose(
                    $contact['email'],
                    array(
                        'denit@swbrasil.org.br',
                        'secretaria@swbrasil.org.br',
                        'hboaventura@gmail.com'
                    ),
                    'Contato SWBrasil',
                    <<<EOF
Nome:$contact[nome]
E-mail:$contact[email]
Telefone:$contact[telefone]
Mensagem:$contact[mensagem]
EOF
                );
                
                $this->getMailer()->send($message);
                
      
                $this->getUser()->setFlash('success','Mensagem enviada com sucesso! Em breve responderemos.');
            } else {
                $this->getUser()->setFlash('error', 'Oooops, alguns campos não estão preenchidos corretamente');
            }
        }
    }
}
