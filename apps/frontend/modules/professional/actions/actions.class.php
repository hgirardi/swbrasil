<?php

/**
 * professional actions.
 *
 * @package    swbrasil
 * @subpackage professional
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class professionalActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeList(sfWebRequest $request)
    {
        $page = ($request->getParameter('page') != '') ? $request->getParameter('page') : 1;
        $professionals = Doctrine_Core::getTable('Professional')->listByDate();
        $this->pager = new sfDoctrinePager('Professional', 15);
        $this->pager->setQuery($professionals);
        $this->pager->setPage($page);
        $this->pager->init();

        $this->professionals = $this->pager->getResults();
    }
}
