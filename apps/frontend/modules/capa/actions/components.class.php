<?php
 
class capaComponents extends sfComponents
{
    public function executeMenu()
    {
        $this->categories = Doctrine_Core::getTable('Category')->getPages();
    }
}
