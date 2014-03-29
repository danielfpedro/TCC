<div class="alunos view">
<h2><?php echo __('Aluno'); ?></h2>
	<dl class="dl-horizontal">
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
