
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Disciplinas', 'url'=> array('action'=> 'index')),
			array('label'=>'Adicionar Disciplina', 'url'=> array()),
			)
		)
	);?>

<div class="disciplinas form">
<?php
		echo $this->Form->create('Disciplina',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar  Disciplina'); ?></legend>
	<?php
		echo $this->Form->input('name', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('dt_avd1', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_avd2', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_seg_chamada', array('type'=> 'text',' class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_avd3', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_avd4', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_seg_chamada_2', array('type'=> 'text','empty'=> 'Selecione:','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('dt_final', array('type'=> 'text','class'=> 'form-control', 'style'=> 'width: 160px;'));
		echo $this->Form->input('professor_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('Curso', array('class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>