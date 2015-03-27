<h2><?php //echo $message; ?></h2>
<p class="error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'Url saisie non valide (%s) : %s.'),"<strong>'{$url}'</strong>",$message
	); ?>
        
</p>
<p>
    <?php echo $this->Html->link('Accueil',array('controller' => 'posts', 'action' => 'index')); ?>
</p>
<?php
if (Configure::read('debug') > 0):
	//echo $this->element('exception_stack_trace');
endif;
?>
