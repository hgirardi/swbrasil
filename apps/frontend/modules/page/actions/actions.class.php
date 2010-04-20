<?php

/**
 * page actions.
 *
 * @package    swbrasil
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeView(sfWebRequest $request)
    {
        $this->page = Doctrine::getTable('Page')->findOneBySlug($request->getParameter('slug_page')); 
    }
}
