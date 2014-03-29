<div class="alunos index">

	<?php
	$label = 'Adicionar Aluno';
	$path = array('controller'=> 'alunos', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Alunos'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th style="width: 60px;"><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('token_api_mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_nome'); ?></th>
			<th class="actions text-center" style="width: 140px;"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alunos as $aluno): ?>
	<tr>
		<td><?php echo h(str_pad($aluno['Aluno']['id'], 5, 0, STR_PAD_LEFT)); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['name']); ?>&nbsp;</td>
		<td><?php echo h($aluno['Aluno']['token_api_mobile']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aluno['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $aluno['Curso']['id'])); ?>
		</td>
		<td><?php echo h($aluno['Aluno']['periodo_nu'] .' '. $aluno['Aluno']['periodo_nome']); ?>&nbsp;</td>
		<td class="actions text-center">
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-eye-open\'></span>', array('action' => 'view', $aluno['Aluno']['id']), array('class'=> 'btn btn-sm btn-primary', 'title'=> 'Ver', 'escape'=> false)); ?>
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-pencil\'></span>', array('action' => 'edit', $aluno['Aluno']['id']), array('class'=> 'btn btn-sm btn-default', 'title'=> 'Editar', 'escape'=> false)); ?>
			<?php echo $this->Form->postLink('<span class=\'glyphicon glyphicon-remove\'></span>', array('action' => 'delete', $aluno['Aluno']['id']), array('class'=> 'btn btn-sm btn-danger', 'title'=> 'Deletar', 'escape'=> false), __('Are you sure you want to delete # %s?', $aluno['Aluno']['id'])); ?>
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
