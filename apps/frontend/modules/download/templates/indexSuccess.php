<h2>Downloads</h2>
<ul>
    <?php
        foreach($downloads as $download){
            $path = explode('.', $download->path);
    ?>
    <li class="<?php echo $download->type; ?>"><?php echo link_to($download->name,'/uploads/download/' . $download->path); ?> <?php echo ($download->description != '') ? '('.$download->description.')' : '';?></li>
    <?php
        }
    ?>
    
</ul>