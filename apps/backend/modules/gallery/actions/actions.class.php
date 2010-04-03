<?php

require_once dirname(__FILE__).'/../lib/galleryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/galleryGeneratorHelper.class.php';

/**
 * gallery actions.
 *
 * @package    swbrasil
 * @subpackage gallery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryActions extends autoGalleryActions
{
    public function executeCreate(sfWebRequest $request)
    {
        $gallery = $request->getParameter('gallery');
        $gallery['slug'] = Util::removeInvalidChar($gallery['title']);
        $request->setParameter('gallery', $gallery);

        parent::executeCreate($request);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $gallery = $request->getParameter('gallery');
        $gallery['slug'] = Util::removeInvalidChar($gallery['title']);
        $request->setParameter('gallery', $gallery);

        parent::executeUpdate($request);
    }

}
