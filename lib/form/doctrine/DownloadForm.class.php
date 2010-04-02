<?php

/**
 * Download form.
 *
 * @package    swbrasil
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DownloadForm extends BaseDownloadForm
{

    public function configure()
    {

        $this->widgetSchema['type'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['path'] = new sfWidgetFormInputFile();

        $this->validatorSchema['path'] = new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/download/', 'required' => true));
    }

    public function bind(array $taintedValues = null, array $taintedFiles = null) {
        $file = explode('.', $taintedFiles['path']['name']);
        $taintedValues['type'] = $file[1];

        parent::bind($taintedValues, $taintedFiles);

    }

}
