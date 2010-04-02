<?php use_helper('I18N', 'Date') ?>
<?php include_partial('professional/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Alterar Profissional', array(), 'messages') ?></h1>

  <?php include_partial('professional/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('professional/form_header', array('professional' => $professional, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('professional/form', array('professional' => $professional, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('professional/form_footer', array('professional' => $professional, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
