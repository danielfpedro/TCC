<h1>hjhjkh</h1>
<div class="disciplinasProfessores view">
<h2><?php echo __('Disciplinas Professor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disciplinasProfessor['DisciplinasProfessor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplinasProfessor['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $disciplinasProfessor['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplinasProfessor['Professor']['name'], array('controller' => 'professores', 'action' => 'view', $disciplinasProfessor['Professor']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disciplinas Professor'), array('action' => 'edit', $disciplinasProfessor['DisciplinasProfessor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disciplinas Professor'), array('action' => 'delete', $disciplinasProfessor['DisciplinasProfessor']['id']), null, __('Are you sure you want to delete # %s?', $disciplinasProfessor['DisciplinasProfessor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas Professores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplinas Professor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores'), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('controller' => 'professores', 'action' => 'add')); ?> </li>
	</ul>
</div>
