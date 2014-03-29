<h1>hjhjkh</h1>
<div class="boletins view">
<h2><?php echo __('Boletim'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Avd1'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_avd1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Avd2'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_avd2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota 2 Ch'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_2_ch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Avd3'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_avd3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Avd4'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_avd4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota 2 Ch 2'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_2_ch_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota Final'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['nota_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faltas'); ?></dt>
		<dd>
			<?php echo h($boletim['Boletim']['faltas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($boletim['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $boletim['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($boletim['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $boletim['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Boletim'), array('action' => 'edit', $boletim['Boletim']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Boletim'), array('action' => 'delete', $boletim['Boletim']['id']), null, __('Are you sure you want to delete # %s?', $boletim['Boletim']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Boletins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Boletim'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
	</ul>
</div>
