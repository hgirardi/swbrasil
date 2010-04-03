<?php

/**
 * Photo form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PhotoForm extends BasePhotoForm
{
    public function configure()
    {
        unset(
            $this['gallery_id']
        );

        $this->widgetSchema['path'] = new sfWidgetFormInputFile(array(
            'label'     => 'Imagem',
        ));

        $this->widgetSchema->setLabels(array(
            'description' => 'Descrição',
            'path'        => 'Imagem'
        ));

        $this->validatorSchema['path'] = new sfValidatorFile(array(
            'path'       => sfConfig::get('sf_upload_dir') . '/gallery/',
            'required'   => true,
            'mime_types' => 'web_images',
        ));


        $this->useFields(array(
            'path',
            'description'
        ));

    }
}
