<h1>hjhjkh</h1>
<div class="cursosDisciplinas view">
<h2><?php echo __('Cursos Disciplina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cursosDisciplina['CursosDisciplina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosDisciplina['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosDisciplina['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosDisciplina['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $cursosDisciplina['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cursos Disciplina'), array('action' => 'edit', $cursosDisciplina['CursosDisciplina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cursos Disciplina'), array('action' => 'delete', $cursosDisciplina['CursosDisciplina']['id']), null, __('Are you sure you want to delete # %s?', $cursosDisciplina['CursosDisciplina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Disciplinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Disciplina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
