<h1>hjhjkh</h1>
<div class="livrosEmprestimos view">
<h2><?php echo __('Livros Emprestimo'); ?></h2>
	<dl>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Livros Emprestimo'), array('action' => 'edit', $livrosEmprestimo['LivrosEmprestimo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Livros Emprestimo'), array('action' => 'delete', $livrosEmprestimo['LivrosEmprestimo']['id']), null, __('Are you sure you want to delete # %s?', $livrosEmprestimo['LivrosEmprestimo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Livros Emprestimos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Livros Emprestimo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
