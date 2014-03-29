<h1>hjhjkh</h1>
<div class="disciplinas view">
<h2><?php echo __('Disciplina'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Avd1'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_avd1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Avd2'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_avd2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Seg Chamada'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_seg_chamada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Avd3'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_avd3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Avd4'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_avd4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Seg Chamada 2'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_seg_chamada_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Final'); ?></dt>
		<dd>
			<?php echo h($disciplina['Disciplina']['dt_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($disciplina['Professor']['name'], array('controller' => 'professores', 'action' => 'view', $disciplina['Professor']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disciplina'), array('action' => 'edit', $disciplina['Disciplina']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disciplina'), array('action' => 'delete', $disciplina['Disciplina']['id']), null, __('Are you sure you want to delete # %s?', $disciplina['Disciplina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores'), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('controller' => 'professores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boletins'), array('controller' => 'boletins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Boletim'), array('controller' => 'boletins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Boletins'); ?></h3>
	<?php if (!empty($disciplina['Boletim'])): ?>
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
	<?php foreach ($disciplina['Boletim'] as $boletim): ?>
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
	<h3><?php echo __('Related Horarios'); ?></h3>
	<?php if (!empty($disciplina['Horario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dia Semana'); ?></th>
		<th><?php echo __('Horario'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disciplina['Horario'] as $horario): ?>
		<tr>
			<td><?php echo $horario['id']; ?></td>
			<td><?php echo $horario['dia_semana']; ?></td>
			<td><?php echo $horario['horario']; ?></td>
			<td><?php echo $horario['disciplina_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), null, __('Are you sure you want to delete # %s?', $horario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos'); ?></h3>
	<?php if (!empty($disciplina['Curso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($disciplina['Curso'] as $curso): ?>
		<tr>
			<td><?php echo $curso['id']; ?></td>
			<td><?php echo $curso['name']; ?></td>
			<td><?php echo $curso['modified']; ?></td>
			<td><?php echo $curso['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, __('Are you sure you want to delete # %s?', $curso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
