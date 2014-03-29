<div class="cursosDisciplinasProfessores index">

	<?php
	$label = 'Adicionar CursosDisciplinasProfessor';
	$path = array('controller'=> 'cursosDisciplinasProfessores', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Cursos Disciplinas Professores'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cursos_professor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cursos_disciplina_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cursosDisciplinasProfessores as $cursosDisciplinasProfessor): ?>
	<tr>
		<td><?php echo h($cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosDisciplinasProfessor['CursosProfessor']['id'], array('controller' => 'cursos_professores', 'action' => 'view', $cursosDisciplinasProfessor['CursosProfessor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosDisciplinasProfessor['CursosDisciplina']['id'], array('controller' => 'cursos_disciplinas', 'action' => 'view', $cursosDisciplinasProfessor['CursosDisciplina']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id']), null, __('Are you sure you want to delete # %s?', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id'])); ?>
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
