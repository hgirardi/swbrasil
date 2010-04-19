<?php
    use_helper('Date');
?>
<h2>Página Inicial</h2>
<div id="ads_700">
    Publicidade
</div>
<div id="newsBox">
    <h3>Notícia</h3>
    <?php
        if($news->picture != ''){
    ?>
    <span class="picture">
    <?php
        echo image_tag('/uploads/news/thumb_' . $news->picture);
    ?>
    <h4><?php echo link_to($news->title,'@news_view?slug=' . $news->slug); ?></h4>
    </span>
    <?php
        }
    ?>
    <p><?php echo strip_tags($news->content); ?></p>
    <?php echo link_to('Leia mais','@news_view?slug=' . $news->slug,array('class' => 'leiamais'));?>
</div>
<div id="socialMedia">
    <h3>Grupos Sociais</h3>
    <?php echo link_to(image_tag('/images/orkut_logo.png',array('title' => 'Orkut', 'alt' => 'Logo da rede social Orkut')),'http://www.orkut.com.br/Main#Community.aspx?cmm=6457587'); ?>
    <?php echo image_tag('/images/skype_logo.png',array('title' => 'Skype - absw-secretaria', 'alt' => 'Logo do Skype - absw-secretaria')); ?>
    <?php echo link_to(image_tag('/images/grupos_logo.png',array('title' => 'Grupos', 'alt' => 'Logo do Grupos')),'http://www.grupos.com.br/group/absw/SpreadingBox.html?id_grupo=243733&action=subscribe&email='); ?>
</div>
<div class="ads_125">Publicidade</div>
<div class="ads_125">Publicidade</div>
<div id="caracteristicas">
    <h3>Características</h3>
    <p><?php echo strip_tags($caracteristicas->content); ?></p>
    <?php echo link_to('Leia mais...', '@page_view?slug_category=geral&slug_page=caracteristicas'); ?>
</div>
<div id="cuidados">
    <h3>Cuidados</h3>
    <p><?php echo strip_tags($cuidados->content); ?></p>
    <?php echo link_to('Leia mais...', '@page_view?slug_category=geral&slug_page=caracteristicas'); ?>
</div>
<div id="ads_160">
    Publicidade
</div>
<div id="guestbook">
    <h3>Livro de Visita</h3>
    <ul>
        <?php
            foreach($messages as $message){
        ?>
        <li>
            <span class="date"><?php echo format_date($message->created_at,'dd/MM/y');; ?></span> por <span class="author"><?php echo $message->name; ?></span> de <span class="location"><?php echo $message->city . '/' . $message->state . ' - ' . $message->country; ?></span>
            <p><em><?php echo $message->comment; ?></em></p>
        </li>
        <?php
            }
        ?>
    </ul>
    <?php echo link_to('Leia mais...', '/livrodevisitas/index'); ?>
</div>