
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Alunos', 'link'=> 'aqui'),
			array('label'=>'Adicionar Aluno', 'link'=> 'aqui'),
			)
		)
	);?>

<div class="noticias form">
<?php
		echo $this->Form->create('Noticia',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar  Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('texto', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('usuario_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('curso_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>