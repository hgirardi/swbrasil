<?php

/**
 * News form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
    public function configure()
    {
        unset(
            $this['created_at'],
            $this['updated_at']
        );

        $this->widgetSchema['slug'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['content'] = new isicsWidgetFormTinyMCE(array(
            'tiny_options' => sfConfig::get('app_tiny_mce_my_settings', array()))
        );

        $this->widgetSchema['picture'] = new sfWidgetFormInputFileEditable(array(
            'label'     => 'Imagem',
            'file_src'  => '/uploads/news/'.$this->getObject()->getPicture(),
            'is_image'  => true,
            'edit_mode' => !$this->isNew(),
            'with_delete' => true,
            'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
        ));

        $this->validatorSchema['picture'] = new sfValidatorFile(array(
            'required'             => false,
            'path'                 => sfConfig::get('sf_upload_dir').'/news',
            'mime_types'           => 'web_images'
        ));
        $this->validatorSchema['slug']             = new sfValidatorString(array('required' => false));

    }

    public function save($conn = null)
    {
        $return = parent::save($conn);

        if($this->getObject()->getPicture() != ''){
            $uploadDir = sfConfig::get('sf_upload_dir') . '/news/';

            $image = $this->getObject()->getPicture();

            $img = new sfImage($uploadDir . $image, mime_content_type($uploadDir . $image));
            if($img->getWidth() > $img->getHeight()){
                $img->resize(480,null);
            } else {
                $img->resize(null, 360);
            }
            $img->setQuality(95);
            $img->save();

            $img->resize(120,90)->saveAs($uploadDir . 'thumb_' . $image);
        }
        return $return;
    }

}
