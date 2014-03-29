
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Eventos', 'url'=> array('action'=> 'index')),
			array('label'=>'Editar Evento', 'url'=> array()),
			)
		)
	);?>

<div class="eventos form">
<?php
		echo $this->Form->create('Evento',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Editar  Evento'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('name', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('dt_evento', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('curso_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>