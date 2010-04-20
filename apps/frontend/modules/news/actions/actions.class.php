<?php

/**
 * news actions.
 *
 * @package    swbrasil
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeView(sfWebRequest $request)
    {
    }
    
    public function executeList(sfWebRequest $request)
    {
        $page = ($request->getParameter('page') != '') ? $request->getParameter('page') : 1;
        $news = Doctrine_Core::getTable('News')->listNewsByDate();
        $this->pager = new sfDoctrinePager('News', 15);
        $this->pager->setQuery($news);
        $this->pager->setPage($page);
        $this->pager->init();

        $this->news = $this->pager->getResults();

    }
}
