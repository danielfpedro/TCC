<div class="eventos view">
<h2><?php echo __('Evento'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Evento'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['dt_evento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($evento['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $evento['Curso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
