<div class="noticias index">

	<?php
	$label = 'Adicionar Noticia';
	$path = array('controller'=> 'noticias', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Noticias'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th class="actions text-center" style="width: 140px;"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($noticias as $noticia): ?>
	<tr>
		<td><?php echo h(str_pad($noticia['Noticia']['id'], 4, 0, STR_PAD_LEFT)); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['texto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($noticia['Usuario']['name'], array('controller' => 'usuarios', 'action' => 'view', $noticia['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo (!is_null($noticia['Curso']['id'])) ? $this->Html->link($noticia['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $noticia['Curso']['id'])) : '-'; ?>
		</td>
		<td class="actions text-center">
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-eye-open\'></span>', array('action' => 'view', $noticia['Noticia']['id']), array('class'=> 'btn btn-sm btn-primary', 'title'=> 'Ver', 'escape'=> false)); ?>
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-pencil\'></span>', array('action' => 'edit', $noticia['Noticia']['id']), array('class'=> 'btn btn-sm btn-default', 'title'=> 'Editar', 'escape'=> false)); ?>
			<?php echo $this->Form->postLink('<span class=\'glyphicon glyphicon-remove\'></span>', array('action' => 'delete', $noticia['Noticia']['id']), array('class'=> 'btn btn-sm btn-danger', 'title'=> 'Deletar', 'escape'=> false), __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registro(s) de um total de {:count}')));
	?>	</p>
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('<span class=\'glyphicon glyphicon-chevron-left\'></span>', array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape'=> false));
		echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));		echo $this->Paginator->next('<span class=\'glyphicon glyphicon-chevron-right\'></span>', array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape'=> false));	?>
	</div>
</div>
