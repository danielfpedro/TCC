
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Alunos', 'link'=> 'aqui'),
			array('label'=>'Adicionar Aluno', 'link'=> 'aqui'),
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
		<legend><?php echo __('Adicionar  Livros Emprestimo'); ?></legend>
	<?php
		echo $this->Form->input('livro_nome', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('dt_emprestimo', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('dt_entrega', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('aluno_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>