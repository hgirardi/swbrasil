<h2>Contato</h2>

<p>Para entrar em contato conosco, preenche o formulário abaixo.</p>

<?php if ($sf_user->getFlash('success')){ ?>
    <div class="success"><?php echo $sf_user->getFlash('success') ?></div>
<?php }
      if($sf_user->getFlash('error')){
?>
    <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
<?php
      }
?>

<form action="<?php echo url_for('contato/create');?>" method="post">
    <fieldset>
        <legend>Preencha todos os campos</legend>
        <?php echo $form->render(); ?>
        <input type="submit" value="Enviar" class="button" />
    </fieldset>
</form>