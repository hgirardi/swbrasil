<?php

/**
 * Article form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleForm extends BaseArticleForm
{
    public function configure()
    {
        unset(
            $this['created_at'],
            $this['updated_at'],
            $this['slug']
        );

        $this->widgetSchema['content'] = new isicsWidgetFormTinyMCE(array(
            'tiny_options' => sfConfig::get('app_tiny_mce_my_settings', array()))
        );
    }
}
