<?php

class NewsTable extends Doctrine_Table
{
    public function getLastNew()
    {
        $q = $this->createQuery()
           ->from('News n')
           ->orderBy('n.created_at DESC')
           ->limit(1);

        return $q->fetchOne();
    }

}
