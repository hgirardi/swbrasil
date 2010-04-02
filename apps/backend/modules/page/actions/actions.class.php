<?php

require_once dirname(__FILE__).'/../lib/pageGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/pageGeneratorHelper.class.php';

/**
 * page actions.
 *
 * @package    swbrasil
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageActions extends autoPageActions
{
    public function executeCreate(sfWebRequest $request)
    {
        $page = $request->getParameter('page');
        $page['slug'] = Util::removeInvalidChar($page['title']);
        $request->setParameter('page', $page);

        parent::executeCreate($request);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $page = $request->getParameter('page');
        $page['slug'] = Util::removeInvalidChar($page['title']);
        $request->setParameter('page', $page);

        parent::executeUpdate($request);
    }
}
