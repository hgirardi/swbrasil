<?php

/**
 * gallery actions.
 *
 * @package    swbrasil
 * @subpackage gallery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeList(sfWebRequest $request)
    {
        $page = ($request->getParameter('page') != '') ? $request->getParameter('page') : 1;
        $gallery = Doctrine_Core::getTable('Gallery')->listGalleriesByDate();
        $this->pager = new sfDoctrinePager('Gallery', 4);
        $this->pager->setQuery($gallery);
        $this->pager->setPage($page);
        $this->pager->init();

        $this->galleries = $this->pager->getResults();        
    }
    
    public function executeView(sfWebRequest $request)
    {
        $this->gallery = Doctrine_Core::getTable('Gallery')->findOneBySlug($request->getParameter('slug'));
    }
}
