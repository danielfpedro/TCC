<h1>hjhjkh</h1>
<div class="alunosCursos view">
<h2><?php echo __('Alunos Curso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alunosCurso['AlunosCurso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunosCurso['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $alunosCurso['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunosCurso['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $alunosCurso['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo Nu'); ?></dt>
		<dd>
			<?php echo h($alunosCurso['AlunosCurso']['periodo_nu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo Nome'); ?></dt>
		<dd>
			<?php echo h($alunosCurso['AlunosCurso']['periodo_nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alunos Curso'), array('action' => 'edit', $alunosCurso['AlunosCurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alunos Curso'), array('action' => 'delete', $alunosCurso['AlunosCurso']['id']), null, __('Are you sure you want to delete # %s?', $alunosCurso['AlunosCurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alunos Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boletins'), array('controller' => 'boletins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Boletim'), array('controller' => 'boletins', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Boletins'); ?></h3>
	<?php if (!empty($alunosCurso['Boletim'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nota Avd1'); ?></th>
		<th><?php echo __('Nota Avd2'); ?></th>
		<th><?php echo __('Nota 2 Ch'); ?></th>
		<th><?php echo __('Nota Final'); ?></th>
		<th><?php echo __('Faltas'); ?></th>
		<th><?php echo __('Cursos Disciplina Id'); ?></th>
		<th><?php echo __('Alunos Curso Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alunosCurso['Boletim'] as $boletim): ?>
		<tr>
			<td><?php echo $boletim['id']; ?></td>
			<td><?php echo $boletim['nota_avd1']; ?></td>
			<td><?php echo $boletim['nota_avd2']; ?></td>
			<td><?php echo $boletim['nota_2_ch']; ?></td>
			<td><?php echo $boletim['nota_final']; ?></td>
			<td><?php echo $boletim['faltas']; ?></td>
			<td><?php echo $boletim['cursos_disciplina_id']; ?></td>
			<td><?php echo $boletim['alunos_curso_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'boletins', 'action' => 'view', $boletim['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'boletins', 'action' => 'edit', $boletim['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'boletins', 'action' => 'delete', $boletim['id']), null, __('Are you sure you want to delete # %s?', $boletim['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Boletim'), array('controller' => 'boletins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
