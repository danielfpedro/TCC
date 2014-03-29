<div class="cursosProfessores index">

	<?php
	$label = 'Adicionar CursosProfessor';
	$path = array('controller'=> 'cursosProfessores', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Cursos Professores'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('professor_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cursosProfessores as $cursosProfessor): ?>
	<tr>
		<td><?php echo h($cursosProfessor['CursosProfessor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cursosProfessor['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosProfessor['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cursosProfessor['Professor']['name'], array('controller' => 'professores', 'action' => 'view', $cursosProfessor['Professor']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cursosProfessor['CursosProfessor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cursosProfessor['CursosProfessor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cursosProfessor['CursosProfessor']['id']), null, __('Are you sure you want to delete # %s?', $cursosProfessor['CursosProfessor']['id'])); ?>
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
