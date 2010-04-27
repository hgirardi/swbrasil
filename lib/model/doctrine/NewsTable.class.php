<?php

class NewsTable extends Doctrine_Table
{
    public function getLastestNew($id,$limit = 5)
    {
        $q = $this->createQuery()
           ->from('News n')
           ->where('n.id <> ' . $id)
           ->orderBy('n.created_at DESC')
           ->limit($limit);

        return $q->execute();
    }
    
    public function getLastImage()
    {
        $q = $this->createQuery()
           ->from('News n')
           ->where('n.picture IS NOT NULL')
           ->orderBy('n.created_at DESC')
           ->limit(1);

        return $q->fetchOne();
    }
    
    public function listNewsByDate()
    {
        $q = $this->createQuery()
           ->from('News n')
           ->orderBy('n.created_at DESC');

        return $q;
    }

}
