<div class="livrosEmprestimos view">
<h2><?php echo __('Livros Emprestimo'); ?></h2>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($livrosEmprestimo['LivrosEmprestimo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Livro Nome'); ?></dt>
		<dd>
			<?php echo h($livrosEmprestimo['LivrosEmprestimo']['livro_nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Emprestimo'); ?></dt>
		<dd>
			<?php echo h($livrosEmprestimo['LivrosEmprestimo']['dt_emprestimo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dt Entrega'); ?></dt>
		<dd>
			<?php echo h($livrosEmprestimo['LivrosEmprestimo']['dt_entrega']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($livrosEmprestimo['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $livrosEmprestimo['Aluno']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
