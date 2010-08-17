<?php
    use_helper('Date');
?>
<h2>Agenda</h2>
<dl>
    <?php
        foreach($events as $event){
    ?>
    <dt><?php echo format_date($event->date,'dd/MM/y'); ?> - <?php echo $event->title; ?></dt>
    <dd>Hora: <?php echo format_date($event->time,'HH:mm') ?></dd>
    <dd>Local: <?php echo $event->place ?></dd>
    <dd class="info">Informações: <?php echo $event->info ?></dd>
    <?php
        }
    ?>
</dl>
