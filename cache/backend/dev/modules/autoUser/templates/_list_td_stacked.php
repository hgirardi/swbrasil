<td colspan="4">
  <?php echo __('%%name%% - %%username%% - %%email%% - %%level%%', array('%%name%%' => $user->getName(), '%%username%%' => $user->getUsername(), '%%email%%' => $user->getEmail(), '%%level%%' => $user->getLevel()), 'messages') ?>
</td>
