<?php
    foreach($categories as $category){
?>
    <h3><?php echo $category->name; ?></h3>
    <ul>        
        <?php
            if($category->name == 'Geral'){
        ?>
        <li><?php echo link_to('Capa','@homepage'); ?></li>
        <li><?php echo link_to('Notícias','@news_list_blank'); ?></li>
        <li><?php echo link_to('Profissionais','@professional_list'); ?></li>
        <li><?php echo link_to('Livro de Visitas','@guestbook_list'); ?></li>
        <li><?php echo link_to('Downloads','download/index'); ?></li>
        <li><?php echo link_to('Links','@links'); ?></li>
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
    <ul id="partners">
        <?php
            foreach($partners as $partner){
        ?>
        <li><?php echo link_to(image_tag('/uploads/partner/' . $partner->path, array('alt' => $partner->name)),$partner->url,array('title'=>$partner->name));?></li>
        <?php
            }
        ?>
    </ul>