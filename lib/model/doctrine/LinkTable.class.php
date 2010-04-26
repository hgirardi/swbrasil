<?php

class LinkTable extends Doctrine_Table
{
    public function findAllLinks()
    {
        $q = $this->createQuery()
           ->from('Link l')
           ->orderBy('l.name');

        return $q->execute();
    }
}
