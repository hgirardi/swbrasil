<h2>Links</h2>
<ul>
    <?php
        foreach($links as $link){
    ?>
    <li><strong><?php echo link_to($link->name,$link->url); ?></strong> - <?php echo $link->description;?></li>
    <?php
        }
    ?>    
</ul>