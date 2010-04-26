<?php
 
class capaComponents extends sfComponents
{
    public function executeMenu()
    {
        $this->categories = Doctrine_Core::getTable('Category')->getPages();
        $this->partners = Doctrine_Core::getTable('Partner')->findAll();
    }
}
