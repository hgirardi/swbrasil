<?php

require_once dirname(__FILE__).'/../lib/newsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/newsGeneratorHelper.class.php';

/**
 * news actions.
 *
 * @package    swbrasil
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends autoNewsActions
{
    public function executeCreate(sfWebRequest $request)
    {
        $news = $request->getParameter('news');
        $news['slug'] = Util::removeInvalidChar($news['title']);
        $request->setParameter('news', $news);

        parent::executeCreate($request);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $news = $request->getParameter('news');
        $news['slug'] = Util::removeInvalidChar($news['title']);
        $request->setParameter('news', $news);

        parent::executeUpdate($request);
    }

}
