<?php

/**
 * BaseAgenda
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property date $date
 * @property time $time
 * @property string $place
 * @property text $info
 * 
 * @method string getTitle() Returns the current record's "title" value
 * @method date   getDate()  Returns the current record's "date" value
 * @method time   getTime()  Returns the current record's "time" value
 * @method string getPlace() Returns the current record's "place" value
 * @method text   getInfo()  Returns the current record's "info" value
 * @method Agenda setTitle() Sets the current record's "title" value
 * @method Agenda setDate()  Sets the current record's "date" value
 * @method Agenda setTime()  Sets the current record's "time" value
 * @method Agenda setPlace() Sets the current record's "place" value
 * @method Agenda setInfo()  Sets the current record's "info" value
 * 
 * @package    swbrasil
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAgenda extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('agenda');
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('date', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('time', 'time', null, array(
             'type' => 'time',
             'notnull' => true,
             ));
        $this->hasColumn('place', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('info', 'text', null, array(
             'type' => 'text',
             'notnull' => true,
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