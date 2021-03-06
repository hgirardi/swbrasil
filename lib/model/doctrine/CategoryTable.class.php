<?php

class CategoryTable extends Doctrine_Table
{
    public function getArticles()
    {
        $q = $this->createQuery()
           ->from('Category c')
           ->innerJoin('c.Articles p')
           ->where("p.slug NOT IN ('sobre-a-absw','sobre-o-site','faca-uma-doacao')")
           ->orderBy('c.id, p.title');

        return $q->execute();
    }
}
