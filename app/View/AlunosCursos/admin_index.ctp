<div class="alunosCursos index">

	<?php
	$label = 'Adicionar AlunosCurso';
	$path = array('controller'=> 'alunosCursos', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Alunos Cursos'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_nu'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alunosCursos as $alunosCurso): ?>
	<tr>
		<td><?php echo h($alunosCurso['AlunosCurso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alunosCurso['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $alunosCurso['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alunosCurso['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $alunosCurso['Curso']['id'])); ?>
		</td>
		<td><?php echo h($alunosCurso['AlunosCurso']['periodo_nu']); ?>&nbsp;</td>
		<td><?php echo h($alunosCurso['AlunosCurso']['periodo_nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alunosCurso['AlunosCurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alunosCurso['AlunosCurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alunosCurso['AlunosCurso']['id']), null, __('Are you sure you want to delete # %s?', $alunosCurso['AlunosCurso']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registro(s) de um total de {:count} , começando no registro {:start} e terminando no registro {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
