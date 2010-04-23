<h2>Downloads</h2>
<ul>
    <?php
        foreach($downloads as $download){
            $path = explode('.', $download->path);
    ?>
    <li><?php echo link_to($download->description,'/uploads/download/' . $download->path, array('class' => $download->type)); ?></li>
    <?php
        }
    ?>
    
</ul>