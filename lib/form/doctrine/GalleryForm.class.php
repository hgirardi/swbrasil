<?php

/**
 * Gallery form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GalleryForm extends BaseGalleryForm
{
    public function configure()
    {
        unset(
            $this['created_at'],
            $this['updated_at']
        );

        $this->widgetSchema['slug'] = new sfWidgetFormInputHidden();

        $this->useFields(array(
            'title',
            'description',
            'slug'
        ));

        $this->validatorSchema['slug'] = new sfValidatorString(array('required' => false));

        if(!$this->isNew()){
            $photoForm = new PhotoForm();
            $this->embedForm('photo', $photoForm);
        }

    }

        public function bind(array $taintedValues = null, array $taintedFiles = null) {
        if(!$this->isNew()){
            if (is_null($taintedFiles['photo']['path']['name']) || strlen($taintedFiles['photo']['path']['name']) === 0 ) {
                unset($this->embeddedForms['photo'], $taintedFiles['photo']);
                $this->validatorSchema['photo'] = new sfValidatorPass();

            } else {
                $this->embeddedForms['photo']->getObject()->setGallery($this->getObject());
            }
        }
        parent::bind($taintedValues, $taintedFiles);

    }

    public function save($conn = null)
    {
        $return = parent::save($conn);

        if(!$this->isNew() AND count($this->embeddedForms) != 0){
            $uploadDir = sfConfig::get('sf_upload_dir') . '/gallery/';

            $image = $this->embeddedForms['photo']->getObject()->getPath();

            $img = new sfImage($uploadDir . $image, swImageTransform::mime_content_type($uploadDir . $image));
            if($img->getWidth() > $img->getHeight()){
                $img->resize(600,null);
            } else {
                $img->resize(null, 480);
            }
            $img->setQuality(95);
            $img->overlay(new sfImage(sfConfig::get('sf_web_dir') . '/images/marcadagua.png', 'image/png'), 'bottom-right');
            $img->save();

            $img->resize(null,80)->saveAs($uploadDir . 'thumb_' . $image);
        }
        return $return;
    }


}
