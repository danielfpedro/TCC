<h1>hjhjkh</h1>
<div class="cursosProfessores view">
<h2><?php echo __('Cursos Professor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cursosProfessor['CursosProfessor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosProfessor['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $cursosProfessor['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cursosProfessor['Professor']['name'], array('controller' => 'professores', 'action' => 'view', $cursosProfessor['Professor']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cursos Professor'), array('action' => 'edit', $cursosProfessor['CursosProfessor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cursos Professor'), array('action' => 'delete', $cursosProfessor['CursosProfessor']['id']), null, __('Are you sure you want to delete # %s?', $cursosProfessor['CursosProfessor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Professores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Professor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores'), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('controller' => 'professores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Disciplinas Professores'), array('controller' => 'cursos_disciplinas_professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Disciplinas Professor'), array('controller' => 'cursos_disciplinas_professores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos Disciplinas Professores'); ?></h3>
	<?php if (!empty($cursosProfessor['CursosDisciplinasProfessor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cursos Professor Id'); ?></th>
		<th><?php echo __('Cursos Disciplina Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cursosProfessor['CursosDisciplinasProfessor'] as $cursosDisciplinasProfessor): ?>
		<tr>
			<td><?php echo $cursosDisciplinasProfessor['id']; ?></td>
			<td><?php echo $cursosDisciplinasProfessor['cursos_professor_id']; ?></td>
			<td><?php echo $cursosDisciplinasProfessor['cursos_disciplina_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos_disciplinas_professores', 'action' => 'view', $cursosDisciplinasProfessor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos_disciplinas_professores', 'action' => 'edit', $cursosDisciplinasProfessor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos_disciplinas_professores', 'action' => 'delete', $cursosDisciplinasProfessor['id']), null, __('Are you sure you want to delete # %s?', $cursosDisciplinasProfessor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cursos Disciplinas Professor'), array('controller' => 'cursos_disciplinas_professores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
