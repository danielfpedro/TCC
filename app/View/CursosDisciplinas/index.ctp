<div class="cursosDisciplinas index">

	<?php
	$label = 'Adicionar CursosDisciplina';
	$path = array('controller'=> 'cursosDisciplinas', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Cursos Disciplinas'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th class="actions text-center" style="width: 80px;"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cursosDisciplinas as $cursosDisciplina): ?>
	<tr>
		<td><?php echo h($cursosDisciplina['CursosDisciplina']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosDisciplina['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosDisciplina['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosDisciplina['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $cursosDisciplina['Disciplina']['id'])); ?>
		</td>
		<td class="actions text-center">
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-eye-open\'></span>', array('action' => 'view', $cursosDisciplina['CursosDisciplina']['id']), array('class'=> 'btn btn-sm btn-primary', 'title'=> 'Ver', 'escape'=> false)); ?>
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-pencil\'></span>', array('action' => 'edit', $cursosDisciplina['CursosDisciplina']['id']), array('class'=> 'btn btn-sm btn-default', 'title'=> 'Editar', 'escape'=> false)); ?>
			<?php echo $this->Form->postLink('<span class=\'glyphicon glyphicon-remove\'></span>', array('action' => 'delete', $cursosDisciplina['CursosDisciplina']['id']), array('class'=> 'btn btn-sm btn-danger', 'title'=> 'Deletar', 'escape'=> false), __('Are you sure you want to delete # %s?', $cursosDisciplina['CursosDisciplina']['id'])); ?>
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
