<?php

require_once dirname(__FILE__).'/../lib/guestbookGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/guestbookGeneratorHelper.class.php';

/**
 * guestbook actions.
 *
 * @package    swbrasil
 * @subpackage guestbook
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class guestbookActions extends autoGuestbookActions
{
    public function executeListAprovar(sfWebRequest $request)
    {
        $guestbook = Doctrine::getTable('Guestbook')->find($request->getParameter('id'));
        $guestbook->approved = true;
        $guestbook->save();

        $this->redirect('@guestbook');

        return sfView::NONE;
    }
}
