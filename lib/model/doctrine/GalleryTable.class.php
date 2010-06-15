<?php


class GalleryTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Gallery');
    }
    
    public function listGalleriesByDate()
    {
        $q = $this->createQuery()
           ->select('g.id, g.created_at, g.title, g.slug, (SELECT p.path FROM Photo p WHERE p.gallery_id = g.id LIMIT 1) AS photo')
           ->from('Gallery g')
           ->orderBy('g.created_at DESC');

        return $q;
    }
}
