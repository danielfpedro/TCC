<div class="cursosDisciplinas view">
<h2><?php echo __('Cursos Disciplina'); ?></h2>
	<dl class="dl-horizontal">
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
