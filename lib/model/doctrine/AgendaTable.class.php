<?php


class AgendaTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Agenda');
    }

     public function findEventsOrderedByDate()
    {
        $q = $this->createQuery()
           ->from('Agenda a')
           ->orderBy('a.date ASC');

        return $q->execute();
    }
}
