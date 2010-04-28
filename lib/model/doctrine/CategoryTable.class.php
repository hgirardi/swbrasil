<?php

class CategoryTable extends Doctrine_Table
{
    public function getPages()
    {
        $q = $this->createQuery()
           ->from('Category c')
           ->innerJoin('c.Pages p')
           ->where("p.slug NOT IN ('sobre-a-absw','sobre-o-site')")
           ->orderBy('c.id, p.title');

        return $q->execute();
    }
}
