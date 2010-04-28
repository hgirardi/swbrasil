<?php use_helper('jQuery'); ?>
<h2>Álbum de Fotos</h2>
<h3><?php echo $gallery->title; ?></h3>
<p><?php echo $gallery->description; ?></p>
<ul class="view">
    <?php
        foreach($gallery->getPhotos() as $photo){
    ?>
    <li><?php echo link_to(image_tag('/uploads/gallery/thumb_'.$photo->path),'/uploads/gallery/'.$photo->path, array('class' => 'lightbox', 'title' => $photo->description));?></li>
    <?php
        }
    ?>
</ul>