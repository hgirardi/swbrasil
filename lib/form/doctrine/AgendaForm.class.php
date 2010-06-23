<?php

/**
 * Agenda form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AgendaForm extends BaseAgendaForm
{
    public function configure()
    {
        $this->widgetSchema['info'] = new sfWidgetFormTextarea();
        $this->widgetSchema['date'] = new sfWidgetFormDate(array('format' => '%day%/%month%/%year%'));

        $this->widgetSchema['info'] = new isicsWidgetFormTinyMCE(array(
            'tiny_options' => sfConfig::get('app_tiny_mce_my_settings', array()))
        );
    }
}
