<?php use_helper('jQuery'); ?>
<h2>Notícias</h2>
<h3><?php echo $new->title; ?></h3>
<?php
    if($new->picture != '') {
        echo link_to(image_tag('/uploads/news/thumb_' . $new->picture), '/uploads/news/' . $new->picture,array('class' => 'lightbox'));
    }
?>
<?php echo $new->content; ?>
<div class="source">Fonte: <?php echo $new->source; ?></div>
