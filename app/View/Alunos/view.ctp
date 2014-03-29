<h1>hjhjkh</h1>
<div class="alunos view">
<h2><?php echo __('Aluno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token Api Mobile'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['token_api_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aluno['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $aluno['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo Nu'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['periodo_nu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo Nome'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['periodo_nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aluno'), array('action' => 'edit', $aluno['Aluno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aluno'), array('action' => 'delete', $aluno['Aluno']['id']), null, __('Are you sure you want to delete # %s?', $aluno['Aluno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boletins'), array('controller' => 'boletins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Boletim'), array('controller' => 'boletins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Livros Emprestimos'), array('controller' => 'livros_emprestimos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Livros Emprestimo'), array('controller' => 'livros_emprestimos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Boletins'); ?></h3>
	<?php if (!empty($aluno['Boletim'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nota Avd1'); ?></th>
		<th><?php echo __('Nota Avd2'); ?></th>
		<th><?php echo __('Nota 2 Ch'); ?></th>
		<th><?php echo __('Nota Avd3'); ?></th>
		<th><?php echo __('Nota Avd4'); ?></th>
		<th><?php echo __('Nota 2 Ch 2'); ?></th>
		<th><?php echo __('Nota Final'); ?></th>
		<th><?php echo __('Faltas'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aluno['Boletim'] as $boletim): ?>
		<tr>
			<td><?php echo $boletim['id']; ?></td>
			<td><?php echo $boletim['nota_avd1']; ?></td>
			<td><?php echo $boletim['nota_avd2']; ?></td>
			<td><?php echo $boletim['nota_2_ch']; ?></td>
			<td><?php echo $boletim['nota_avd3']; ?></td>
			<td><?php echo $boletim['nota_avd4']; ?></td>
			<td><?php echo $boletim['nota_2_ch_2']; ?></td>
			<td><?php echo $boletim['nota_final']; ?></td>
			<td><?php echo $boletim['faltas']; ?></td>
			<td><?php echo $boletim['aluno_id']; ?></td>
			<td><?php echo $boletim['disciplina_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Livros Emprestimos'); ?></h3>
	<?php if (!empty($aluno['LivrosEmprestimo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Livro Nome'); ?></th>
		<th><?php echo __('Dt Emprestimo'); ?></th>
		<th><?php echo __('Dt Entrega'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aluno['LivrosEmprestimo'] as $livrosEmprestimo): ?>
		<tr>
			<td><?php echo $livrosEmprestimo['id']; ?></td>
			<td><?php echo $livrosEmprestimo['livro_nome']; ?></td>
			<td><?php echo $livrosEmprestimo['dt_emprestimo']; ?></td>
			<td><?php echo $livrosEmprestimo['dt_entrega']; ?></td>
			<td><?php echo $livrosEmprestimo['aluno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'livros_emprestimos', 'action' => 'view', $livrosEmprestimo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'livros_emprestimos', 'action' => 'edit', $livrosEmprestimo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'livros_emprestimos', 'action' => 'delete', $livrosEmprestimo['id']), null, __('Are you sure you want to delete # %s?', $livrosEmprestimo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Livros Emprestimo'), array('controller' => 'livros_emprestimos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
