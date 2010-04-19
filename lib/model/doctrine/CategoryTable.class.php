<?php

class CategoryTable extends Doctrine_Table
{
    public function getPages()
    {
        $q = $this->createQuery()
           ->from('Category c')
           ->innerJoin('c.Pages p');

        return $q->execute();
    }
}
