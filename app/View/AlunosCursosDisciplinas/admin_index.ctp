<div class="alunosCursosDisciplinas index">

	<?php
	$label = 'Adicionar AlunosCursosDisciplina';
	$path = array('controller'=> 'alunosCursosDisciplinas', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Alunos Cursos Disciplinas'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_avd1'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_avd2'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_2_ch'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_final'); ?></th>
			<th><?php echo $this->Paginator->sort('alunos_curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cursos_disciplina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('faltas'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alunosCursosDisciplinas as $alunosCursosDisciplina): ?>
	<tr>
		<td><?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['id']); ?>&nbsp;</td>
		<td><?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_avd1']); ?>&nbsp;</td>
		<td><?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_avd2']); ?>&nbsp;</td>
		<td><?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_2_ch']); ?>&nbsp;</td>
		<td><?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_final']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alunosCursosDisciplina['AlunosCurso']['id'], array('controller' => 'alunos_cursos', 'action' => 'view', $alunosCursosDisciplina['AlunosCurso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alunosCursosDisciplina['CursosDisciplina']['id'], array('controller' => 'cursos_disciplinas', 'action' => 'view', $alunosCursosDisciplina['CursosDisciplina']['id'])); ?>
		</td>
		<td><?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['faltas']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alunosCursosDisciplina['AlunosCursosDisciplina']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alunosCursosDisciplina['AlunosCursosDisciplina']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alunosCursosDisciplina['AlunosCursosDisciplina']['id']), null, __('Are you sure you want to delete # %s?', $alunosCursosDisciplina['AlunosCursosDisciplina']['id'])); ?>
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
