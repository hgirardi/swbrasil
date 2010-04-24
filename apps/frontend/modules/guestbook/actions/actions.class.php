<?php

/**
 * guestbook actions.
 *
 * @package    swbrasil
 * @subpackage guestbook
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class guestbookActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeList(sfWebRequest $request)
    {
        $this->form = new GuestbookForm();
        
        $page = ($request->getParameter('page') != '') ? $request->getParameter('page') : 1;
        $messages = Doctrine_Core::getTable('Guestbook')->listMessagesByDate();
        $this->pager = new sfDoctrinePager('Guestbook', 10);
        $this->pager->setQuery($messages);
        $this->pager->setPage($page);
        $this->pager->init();

        $this->messages = $this->pager->getResults();
        
        $this->getUser()->setFlash('success', false);
        $this->getUser()->setFlash('error', false);
        
        if($request->getMethod() == 'POST'){
            $requestData = $request->getParameter($this->form->getName());
            $this->form->bind($requestData);
            
            if ($this->form->isValid()){
                $this->form->save();
                $this->getUser()->setFlash('success', 'Mensagem enviada com sucesso! Aguarde aprovação!');
            } else {
                $this->getUser()->setFlash('error', 'Oooops, alguns campos não estão preenchidos corretamente');
            }
        }
    }
}
