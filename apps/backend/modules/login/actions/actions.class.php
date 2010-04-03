<?php

/**
 * login actions.
 *
 * @package    swbrasil
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->form = new BackendLoginForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('login'));
            if ($this->form->isValid()) {
                $this->getUser()->setAuthenticated(true);
                $this->forward('guestbook','index');
            }
        }
    }

    public function executeLogout(sfWebRequest $request)
    {
        $this->getUser()->setAuthenticated(false);
        $this->forward('login','index');
    }
}
