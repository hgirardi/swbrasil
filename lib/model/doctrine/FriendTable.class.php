<?php


class FriendTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Friend');
    }
    
    public function listByDate()
    {
        $q = $this->createQuery()
           ->from('Friend f')
           ->orderBy('f.name');

        return $q;
    }
}
