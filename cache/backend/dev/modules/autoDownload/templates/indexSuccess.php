<?php use_helper('I18N', 'Date') ?>
<?php include_partial('download/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Lista de Arquivos para Download', array(), 'messages') ?></h1>

  <?php include_partial('download/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('download/list_header', array('pager' => $pager)) ?>
  </div>


  <div id="sf_admin_content">
    <form action="<?php echo url_for('download_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('download/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('download/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('download/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('download/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
