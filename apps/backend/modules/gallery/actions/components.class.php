<?php

class galleryComponents extends sfComponents
{
    public function executeShowPhotos(sfWebRequest $request)
    {
        $galleryId = $request->getParameter('id');
        if($galleryId) {
            $query = Doctrine_Query::create()->from('Photo p')
                   ->where('p.gallery_id = ?', $galleryId);
   
            $this->photos = $query->execute();
        }
    }
}