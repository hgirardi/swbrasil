<?php use_helper('Date','recaptcha');?>
<h2>Livro de Visitas</h2>
<p>Seu e-mail não ficará visível no site. Caso queira que apareça, insira-o no texto da mensagem.</p>
<?php if ($sf_user->getFlash('success')){ ?>
    <div class="success"><?php echo $sf_user->getFlash('success') ?></div>
<?php }
      if($sf_user->getFlash('error')){
?>
    <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
<?php
      }
?>
<?php
    foreach($messages as $message){
?>
<div class="message">
    Dia <?php echo format_date($message->created_at,'dd/MM/y') . ', por ' . $message->name . ' de ' . $message->city . '/' . $message->state . ' - ' . $message->country; ?> escreveu:
    <p><?php echo $message->comment;?></p>
</div>
<?php
    }
?>

<?php
    if($pager->haveToPaginate()){
?>
<div class="pagination">
    <a href="<?php echo url_for('@guestbook_list?page=1');?>">
        <img src="/images/first.png" alt="Primeira página" />
    </a>
    <a href="<?php echo url_for('@guestbook_list?page=' . $pager->getPreviousPage() )?>">
        <img src="/images/previous.png" alt="Página anterior" title="Página anterior" />
    </a>
    <?php foreach ($pager->getLinks() as $page): ?>
    <?php if ($page == $pager->getPage()): ?>
    <span class="unlinkedPage"><?php echo $page ?></span>
    <?php else: ?>
    <a href="<?php echo url_for('@guestbook_list?page=' . $page)?>"><?php echo $page ?></a>
    <?php endif; ?>
    <?php endforeach; ?>
    <a href="<?php echo url_for('@guestbook_list?page=' . $pager->getNextPage() ) ; ?>">
        <img src="/images/next.png" alt="Próxima Página" title="Próxima Página" />
    </a>
    <a href="<?php echo url_for('@guestbook_list?page=' . $pager->getLastPage()) ?>">
        <img src="/images/last.png" alt="Última página" title="Última página" />
    </a>
    <span class="results"><?php echo $pager->getNbResults();?> registro(s)</span>
</div>
<?php
    }
?>

<form action="<?php echo url_for('livrodevisitas/create');?>" method="post">
    <fieldset>
        <legend>Deixe uma mensagem</legend>
        <?php echo $form->render(); ?>
        <input type="submit" value="Enviar" class="button" />
    </fieldset>
</form>