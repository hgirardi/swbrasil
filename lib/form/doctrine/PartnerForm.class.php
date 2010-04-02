<?php

/**
 * Partner form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PartnerForm extends BasePartnerForm
{
    public function configure()
    {
        $this->widgetSchema['path'] = new sfWidgetFormInputFileEditable(array(
            'label'     => 'Imagem',
            'file_src'  => '/uploads/partner/'.$this->getObject()->getPath(),
            'is_image'  => true,
            'edit_mode' => !$this->isNew(),
            'with_delete' => true,
            'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
        ));

        $this->validatorSchema['path'] = new sfValidatorFile(array(
            'required'             => false,
            'path'                 => sfConfig::get('sf_upload_dir').'/partner',
            'mime_types'           => 'web_images'
        ));
        $this->validatorSchema['url'] = new sfValidatorUrl(array('required' => true));
    }
}
