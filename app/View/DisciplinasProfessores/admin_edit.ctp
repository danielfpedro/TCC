
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Alunos', 'link'=> 'aqui'),
			array('label'=>'Adicionar Aluno', 'link'=> 'aqui'),
			)
		)
	);?>

<div class="disciplinasProfessores form">
<?php
		echo $this->Form->create('DisciplinasProfessor',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar  Disciplinas Professor'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('disciplina_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('professor_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>