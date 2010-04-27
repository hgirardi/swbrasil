<?php

/**
 * BaseDownload
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property text $description
 * @property string $type
 * @property string $path
 * 
 * @method string   getName()        Returns the current record's "name" value
 * @method text     getDescription() Returns the current record's "description" value
 * @method string   getType()        Returns the current record's "type" value
 * @method string   getPath()        Returns the current record's "path" value
 * @method Download setName()        Sets the current record's "name" value
 * @method Download setDescription() Sets the current record's "description" value
 * @method Download setType()        Sets the current record's "type" value
 * @method Download setPath()        Sets the current record's "path" value
 * 
 * @package    swbrasil
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDownload extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('download');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('description', 'text', null, array(
             'type' => 'text',
             'notnull' => false,
             ));
        $this->hasColumn('type', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '10',
             ));
        $this->hasColumn('path', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '50',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}