<?php

class ProfessionalTable extends Doctrine_Table
{
    public function listByDate()
    {
        $q = $this->createQuery()
           ->from('Professional p')
           ->orderBy('p.name');

        return $q;
    }
}
