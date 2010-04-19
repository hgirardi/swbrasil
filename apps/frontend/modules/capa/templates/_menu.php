<?php
    foreach($categories as $category){
?>
    <h3><?php echo $category->name; ?></h3>
    <ul>        
        <?php
            if($category->name == 'Geral'){
        ?>
        <li><?php echo link_to('Capa','homepage'); ?></li>
        <?php
            }
            foreach($category->Pages as $page){
        ?>
        <li><?php echo link_to($page->title,'@page_view?slug_category='.strtolower($category->name).'&slug_page=' . $page->slug); ?></li>
        <?php
            }
        ?>
    </ul>
<?php
    }
?>
    <h3>Parceiros</h3>