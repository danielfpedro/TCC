
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Notícias', 'url'=> array('action'=> 'index')),
			array('label'=>'Adicionar Notícia', 'url'=> array()),
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
		<legend><?php echo __('Adicionar  Notícia'); ?></legend>
	<?php
		echo $this->Form->input('texto', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('usuario_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('curso_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>