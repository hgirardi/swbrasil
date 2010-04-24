<?php

/**
 * link actions.
 *
 * @package    swbrasil
 * @subpackage link
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class linkActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeList(sfWebRequest $request)
    {
        $this->links = Doctrine::getTable('Link')->findAllLinks();
    }
}
