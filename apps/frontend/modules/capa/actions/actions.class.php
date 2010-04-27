<?php

/**
 * capa actions.
 *
 * @package    swbrasil
 * @subpackage capa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class capaActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->picture = Doctrine::getTable('News')->getLastImage();
        $this->news = Doctrine::getTable('News')->getLastestNew($this->picture->id);
        $this->caracteristicas = Doctrine::getTable('Page')->findOneBySlug('caracteristicas');
        $this->hiperatividade = Doctrine::getTable('Page')->findOneBySlug('hiperatividade');
        $this->messages = Doctrine::getTable('Guestbook')->getMessagesCapa();
    }
}
