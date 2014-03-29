<h1>hjhjkh</h1>
<div class="cursosDisciplinasProfessores view">
<h2><?php echo __('Cursos Disciplinas Professor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursos Professor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosDisciplinasProfessor['CursosProfessor']['id'], array('controller' => 'cursos_professores', 'action' => 'view', $cursosDisciplinasProfessor['CursosProfessor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursos Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosDisciplinasProfessor['CursosDisciplina']['id'], array('controller' => 'cursos_disciplinas', 'action' => 'view', $cursosDisciplinasProfessor['CursosDisciplina']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cursos Disciplinas Professor'), array('action' => 'edit', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cursos Disciplinas Professor'), array('action' => 'delete', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id']), null, __('Are you sure you want to delete # %s?', $cursosDisciplinasProfessor['CursosDisciplinasProfessor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Disciplinas Professores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Disciplinas Professor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Professores'), array('controller' => 'cursos_professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Professor'), array('controller' => 'cursos_professores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Disciplinas'), array('controller' => 'cursos_disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Disciplina'), array('controller' => 'cursos_disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
