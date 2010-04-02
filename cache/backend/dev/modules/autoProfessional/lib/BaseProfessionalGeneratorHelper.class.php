<?php

/**
 * professional module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage professional
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProfessionalGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'professional' : 'professional_'.$action;
  }
}
