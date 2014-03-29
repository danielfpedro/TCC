<h1>hjhjkh</h1>
<div class="alunosCursosDisciplinas view">
<h2><?php echo __('Alunos Cursos Disciplina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Avd1'); ?></dt>
		<dd>
			<?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_avd1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Avd2'); ?></dt>
		<dd>
			<?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_avd2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota 2 Ch'); ?></dt>
		<dd>
			<?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_2_ch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Final'); ?></dt>
		<dd>
			<?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['nota_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alunos Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunosCursosDisciplina['AlunosCurso']['id'], array('controller' => 'alunos_cursos', 'action' => 'view', $alunosCursosDisciplina['AlunosCurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursos Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunosCursosDisciplina['CursosDisciplina']['id'], array('controller' => 'cursos_disciplinas', 'action' => 'view', $alunosCursosDisciplina['CursosDisciplina']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faltas'); ?></dt>
		<dd>
			<?php echo h($alunosCursosDisciplina['AlunosCursosDisciplina']['faltas']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alunos Cursos Disciplina'), array('action' => 'edit', $alunosCursosDisciplina['AlunosCursosDisciplina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alunos Cursos Disciplina'), array('action' => 'delete', $alunosCursosDisciplina['AlunosCursosDisciplina']['id']), null, __('Are you sure you want to delete # %s?', $alunosCursosDisciplina['AlunosCursosDisciplina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos Cursos Disciplinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alunos Cursos Disciplina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos Cursos'), array('controller' => 'alunos_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alunos Curso'), array('controller' => 'alunos_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos Disciplinas'), array('controller' => 'cursos_disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cursos Disciplina'), array('controller' => 'cursos_disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
