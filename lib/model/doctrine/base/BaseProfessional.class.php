<?php

/**
 * BaseProfessional
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $speciality
 * @property string $address
 * @property string $email
 * 
 * @method string       getName()       Returns the current record's "name" value
 * @method string       getSpeciality() Returns the current record's "speciality" value
 * @method string       getAddress()    Returns the current record's "address" value
 * @method string       getEmail()      Returns the current record's "email" value
 * @method Professional setName()       Sets the current record's "name" value
 * @method Professional setSpeciality() Sets the current record's "speciality" value
 * @method Professional setAddress()    Sets the current record's "address" value
 * @method Professional setEmail()      Sets the current record's "email" value
 * 
 * @package    swbrasil
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProfessional extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('professional');
        $this->hasColumn('name', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '150',
             ));
        $this->hasColumn('speciality', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '150',
             ));
        $this->hasColumn('address', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('email', 'string', 50, array(
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
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}