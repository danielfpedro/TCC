
<?php echo $this->element('Admin/breadcrumb',
		array('dados'=>array(
			array('label'=>'Alunos', 'link'=> 'aqui'),
			array('label'=>'Adicionar Aluno', 'link'=> 'aqui'),
			)
		)
	);?>

<div class="alunosCursosDisciplinas form">
<?php
		echo $this->Form->create('AlunosCursosDisciplina',
			array('inputDefaults'=>
				array(
					'div'=> array('class'=> 'form-group')
					)
				)
			);
	?>
	<fieldset>
		<legend><?php echo __('Adicionar  Alunos Cursos Disciplina'); ?></legend>
	<?php
		echo $this->Form->input('id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('nota_avd1', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('nota_avd2', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('nota_2_ch', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('nota_final', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('alunos_curso_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('cursos_disciplina_id', array('empty'=> 'Selecione:','class'=> 'form-control'));
		echo $this->Form->input('faltas', array('empty'=> 'Selecione:','class'=> 'form-control'));
	?>
	</fieldset>
<button type="submit" class="btn btn-success">Salvar</button>
&nbsp;<?php echo $this->Html->link('Cancelar', array('controller'=> '', 'action'=> ''), array('class'=> 'btn btn-danger btn-sm')); ?>
<?php echo $this->Form->end(); ?>
</div>