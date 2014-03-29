<div class="horarios view">
<h2><?php echo __('Horario'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia Semana'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['dia_semana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Horario'); ?></dt>
		<dd>
			<?php echo h($horario['Horario']['horario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disciplina'); ?></dt>
		<dd>
			<?php echo $this->Html->link($horario['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $horario['Disciplina']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
