<div class="disciplinasProfessores index">

	<?php
	$label = 'Adicionar DisciplinasProfessor';
	$path = array('controller'=> 'disciplinasProfessores', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Disciplinas Professores'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th><?php echo $this->Paginator->sort('professor_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disciplinasProfessores as $disciplinasProfessor): ?>
	<tr>
		<td><?php echo h($disciplinasProfessor['DisciplinasProfessor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($disciplinasProfessor['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $disciplinasProfessor['Disciplina']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($disciplinasProfessor['Professor']['name'], array('controller' => 'professores', 'action' => 'view', $disciplinasProfessor['Professor']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $disciplinasProfessor['DisciplinasProfessor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $disciplinasProfessor['DisciplinasProfessor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $disciplinasProfessor['DisciplinasProfessor']['id']), null, __('Are you sure you want to delete # %s?', $disciplinasProfessor['DisciplinasProfessor']['id'])); ?>
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
