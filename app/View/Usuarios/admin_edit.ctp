
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Usuários', 'url'=> array('action'=> 'index')),
			array('label'=>'Editar Usuário', 'url'=> array()),
			)
		)
	);?>

<div class="usuarios form">
<?php
		echo $this->Form->create('Usuario',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Edutar  Usuário'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('name', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('login', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('senha', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('curso_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>