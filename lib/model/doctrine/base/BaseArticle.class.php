<?php

/**
 * BaseArticle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $title
 * @property string $content
 * @property Category $Category
 * 
 * @method integer  getCategoryId()  Returns the current record's "category_id" value
 * @method string   getTitle()       Returns the current record's "title" value
 * @method string   getContent()     Returns the current record's "content" value
 * @method Category getCategory()    Returns the current record's "Category" value
 * @method Article  setCategoryId()  Sets the current record's "category_id" value
 * @method Article  setTitle()       Sets the current record's "title" value
 * @method Article  setContent()     Sets the current record's "content" value
 * @method Article  setCategory()    Sets the current record's "Category" value
 * 
 * @package    swbrasil
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'title',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}