<?php
    use_helper('Date');
?>
<h2>Página Inicial</h2>
<div id="ads_700">
    <a href="#"><img src="/images/colabora_absw700x130.jpg" /></a>
</div>
<div id="newsBox">
    <h3>Notícia</h3>
    <span class="picture">
    <?php
        echo image_tag('/uploads/news/thumb_' . $picture->picture);
    ?>
    <h4><?php echo link_to($picture->title,'@news_view?slug=' . $picture->slug); ?></h4>
    </span>
    <ul>
        <?php
            foreach($news as $new) {
        ?>
        <li><?php echo link_to('&raquo; '.$new->title . ' ('.format_date($new->created_at,'dd/MM/y').')', '@news_view?slug=' . $new->slug) ; ?></li>
        <?php
            }
        ?>
    </ul>
    <p></p>
    <?php echo link_to('Leia mais','@news_list_blank',array('class' => 'leiamais'));?>
</div>
<div id="socialMedia">
    <h3>Grupos Sociais</h3>
    <?php echo link_to(image_tag('/images/orkut_logo.png',array('title' => 'Orkut', 'alt' => 'Logo da rede social Orkut')),'http://www.orkut.com.br/Main#Community.aspx?cmm=6457587'); ?>
    <?php echo image_tag('/images/skype_logo.png',array('title' => 'Skype - absw-secretaria', 'alt' => 'Logo do Skype - absw-secretaria')); ?>
    <?php echo link_to(image_tag('/images/grupos_logo.png',array('title' => 'Grupos', 'alt' => 'Logo do Grupos')),'http://www.grupos.com.br/group/absw/SpreadingBox.html?id_grupo=243733&action=subscribe&email='); ?>
</div>
<div class="ads_125">
    <a href="http://www.doemedula.com"><img src="/images/doemedula125x125.jpg" /></a>
</div>
<div class="ads_125">
    <a href="http://www.mamainfo.org.br"><img src="/images/onconguia_125x125.jpg" /></a>
</div>
<div id="caracteristicas">
    <h3>Características</h3>
    <p><?php echo strip_tags($caracteristicas->content); ?></p>
    <?php echo link_to('Leia mais...', '@page_view?slug_category=geral&slug_page=caracteristicas'); ?>
</div>
<div id="cuidados">
    <h3>Hiperatividade</h3>
    <p><?php echo strip_tags($hiperatividade->content); ?></p>
    <?php echo link_to('Leia mais...', '@page_view?slug_category=geral&slug_page=hiperatividade'); ?>
</div>
<div id="ads_160">
    <a href="http://www.miracula.com.br/mps001/lojas/unicef/index.asp?Parceiro=Unicefhomebr"><img src="/images/banner160x320.jpg" /></a>
</div>
<div id="guestbook">
    <h3>Livro de Visita</h3>
    <ul>
        <?php
            foreach($messages as $message){
        ?>
        <li>
            <span class="date"><?php echo format_date($message->created_at,'dd/MM/y'); ?></span> por <span class="author"><?php echo $message->name; ?></span> de <span class="location"><?php echo $message->city . '/' . $message->state . ' - ' . $message->country; ?></span>
            <p><em><?php echo $message->comment; ?></em></p>
        </li>
        <?php
            }
        ?>
    </ul>
    <?php echo link_to('Leia mais...', '/livrodevisitas/index'); ?>
</div>
