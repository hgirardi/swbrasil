<?php use_helper('I18N', 'Date') ?>
<?php include_partial('download/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Alterar Arquivo para Download', array(), 'messages') ?></h1>

  <?php include_partial('download/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('download/form_header', array('download' => $download, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('download/form', array('download' => $download, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('download/form_footer', array('download' => $download, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
