<?php

class GuestbookTable extends Doctrine_Table
{
    public function getMessagesCapa()
    {
        $q = $this->createQuery()
           ->from('Guestbook g')
           ->where('g.approved = true')
           ->orderBy('g.created_at DESC')
           ->limit(3);

        return $q->execute();
    }
    
    public function listMessagesByDate()
    {
        $q = $this->createQuery()
           ->from('Guestbook g')
           ->where('g.approved = true')
           ->orderBy('g.created_at DESC');

        return $q;
    }
}
