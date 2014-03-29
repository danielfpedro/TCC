<div class="noticias view">
<h2><?php echo __('Noticia'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($noticia['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $noticia['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($noticia['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $noticia['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
