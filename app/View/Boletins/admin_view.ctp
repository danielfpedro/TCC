<div class="boletins view">
<h2><?php echo __('Boletim'); ?></h2>
	<dl class="dl-horizontal">
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
