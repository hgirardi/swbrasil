<h2>Álbum de Fotos</h2>
<ul class="list">
    <?php
        use_helper('Date');
        foreach($galleries as $gallery){
    ?>
    <li>
        <?php echo link_to(image_tag('/uploads/gallery/thumb_' . $gallery->photo),'@gallery_view?slug=' . $gallery->slug);?>
        <span><?php echo link_to($gallery->title . ' (' . format_date($gallery->created_at,'dd/MM/yyyy') . ')' ,'@gallery_view?slug=' . $gallery->slug);?></span>
    </li>
    <?php
        }
    ?>
</ul>

<?php
    if($pager->haveToPaginate()){
?>
<div class="pagination">
    <a href="<?php echo url_for('@gallery_list?page=1');?>">
        <img src="/images/first.png" alt="Primeira página" />
    </a>
    <a href="<?php echo url_for('@gallery_list?page=' . $pager->getPreviousPage() )?>">
        <img src="/images/previous.png" alt="Página anterior" title="Página anterior" />
    </a>
    <?php foreach ($pager->getLinks() as $page): ?>
    <?php if ($page == $pager->getPage()): ?>
    <span class="unlinkedPage"><?php echo $page ?></span>
    <?php else: ?>
    <a href="<?php echo url_for('@gallery_list?page=' . $page)?>"><?php echo $page ?></a>
    <?php endif; ?>
    <?php endforeach; ?>
    <a href="<?php echo url_for('@gallery_list?page=' . $pager->getNextPage() ) ; ?>">
        <img src="/images/next.png" alt="Próxima Página" title="Próxima Página" />
    </a>
    <a href="<?php echo url_for('@gallery_list?page=' . $pager->getLastPage()) ?>">
        <img src="/images/last.png" alt="Última página" title="Última página" />
    </a>
    <span class="results"><?php echo $pager->getNbResults();?> registro(s)</span>
</div>
<?php
    }
?>