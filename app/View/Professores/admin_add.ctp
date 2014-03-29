
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Professores', 'url'=> array('action'=> 'index')),
			array('label'=>'Adicionar Professor', 'url'=> array()),
			)
		)
	);?>

<div class="professores form">
<?php
		echo $this->Form->create('Professor',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar  Professor'); ?></legend>
	<?php
		echo $this->Form->input('name', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>