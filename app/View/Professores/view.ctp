<h1>hjhjkh</h1>
<div class="professores view">
<h2><?php echo __('Professor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($professor['Professor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($professor['Professor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($professor['Professor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($professor['Professor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professor'), array('action' => 'edit', $professor['Professor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Professor'), array('action' => 'delete', $professor['Professor']['id']), null, __('Are you sure you want to delete # %s?', $professor['Professor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Disciplinas'); ?></h3>
	<?php if (!empty($professor['Disciplina'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Dt Avd1'); ?></th>
		<th><?php echo __('Dt Avd2'); ?></th>
		<th><?php echo __('Dt Seg Chamada'); ?></th>
		<th><?php echo __('Dt Avd3'); ?></th>
		<th><?php echo __('Dt Avd4'); ?></th>
		<th><?php echo __('Dt Seg Chamada 2'); ?></th>
		<th><?php echo __('Dt Final'); ?></th>
		<th><?php echo __('Professor Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($professor['Disciplina'] as $disciplina): ?>
		<tr>
			<td><?php echo $disciplina['id']; ?></td>
			<td><?php echo $disciplina['name']; ?></td>
			<td><?php echo $disciplina['modified']; ?></td>
			<td><?php echo $disciplina['created']; ?></td>
			<td><?php echo $disciplina['dt_avd1']; ?></td>
			<td><?php echo $disciplina['dt_avd2']; ?></td>
			<td><?php echo $disciplina['dt_seg_chamada']; ?></td>
			<td><?php echo $disciplina['dt_avd3']; ?></td>
			<td><?php echo $disciplina['dt_avd4']; ?></td>
			<td><?php echo $disciplina['dt_seg_chamada_2']; ?></td>
			<td><?php echo $disciplina['dt_final']; ?></td>
			<td><?php echo $disciplina['professor_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplinas', 'action' => 'view', $disciplina['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplinas', 'action' => 'edit', $disciplina['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplinas', 'action' => 'delete', $disciplina['id']), null, __('Are you sure you want to delete # %s?', $disciplina['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
