<div class="disciplinas view">
<h2><?php echo __('Disciplina'); ?></h2>
	<dl class="dl-horizontal">
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
