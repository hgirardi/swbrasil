<h2>Profissionais</h2>
<dl>
<?php
    foreach($professionals as $professional){
?>
    <dt><?php echo $professional->name; ?></dt>
    <dd>Especialidade: <?php echo $professional->speciality; ?></dd>
    <dd>Endereço: <?php echo $professional->address; ?></dd>
    <dd>E-mail: <?php echo mail_to($professional->email,$professional->email); ?></dd>
<?php      
    }
?>
</dl>
<?php
    if($pager->haveToPaginate()){
?>
<div class="pagination">
    <a href="<?php echo url_for('@professional_list?page=1');?>">
        <img src="/images/first.png" alt="Primeira página" />
    </a>
    <a href="<?php echo url_for('@professional_list?page=' . $pager->getPreviousPage() )?>">
        <img src="/images/previous.png" alt="Previous page" title="Página anterior" />
    </a>
    <?php foreach ($pager->getLinks() as $page): ?>
    <?php if ($page == $pager->getPage()): ?>
    <span class="unlinkedPage"><?php echo $page ?></span>
    <?php else: ?>
    <a href="<?php echo url_for('@professional_list?page=' . $page)?>"><?php echo $page ?></a>
    <?php endif; ?>
    <?php endforeach; ?>
    <a href="<?php echo url_for('@professional_list?page=' . $pager->getNextPage() ) ; ?>">
        <img src="/images/next.png" alt="Next page" title="Próxima Página" />
    </a>
    <a href="<?php echo url_for('@professional_list?page=' . $pager->getLastPage()) ?>">
        <img src="/images/last.png" alt="Last page" title="Última página" />
    </a>
    <span class="results"><?php echo $pager->getNbResults();?> registro(s)</span>
</div>
<?php
    }
?>