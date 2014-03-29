
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Alunos', 'url'=> array('action'=> 'index')),
			array('label'=>'Editar Aluno', 'url'=> array()),
			)
		)
	);?>

<div class="alunos form">
<?php
		echo $this->Form->create('Aluno',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Editar  Aluno'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('matricula', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('name', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('senha', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('token_api_mobile', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('curso_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('periodo_nu', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('periodo_nome', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>