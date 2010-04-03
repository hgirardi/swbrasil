<?php
    use_helper('jQuery');
?>
<ul id="images-list">
    <?php foreach ($photos as $image){ ?>
    <li id="listItem_<?php echo $image->getId(); ?>">
        <?php echo image_tag('/uploads/gallery/thumb_' . $image->getPath()); ?>
        <?php 
            echo jq_link_to_remote(image_tag('/images/delete.png', array()), array(
                'url' => 'gallery/deletePhoto?photo_id=' . $image->getId(),
                'complete' => '$("#listItem_' . $image->getId() . '").remove();',
            )); 
        ?>
    </li>
    <?php } ?>
</ul>