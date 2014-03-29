
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Empréstimos de livros', 'url'=> array('action'=> 'index')),
			array('label'=>'Editar Empréstimo de livro', 'url'=> array()),
			)
		)
	);?>

<div class="livrosEmprestimos form">
<?php
		echo $this->Form->create('LivrosEmprestimo',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Editar Empréstimo de livro'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('livro_nome', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('dt_emprestimo', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_entrega', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('aluno_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>