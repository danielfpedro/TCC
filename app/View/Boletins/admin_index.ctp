<div class="boletins index">

	<?php
	$label = 'Adicionar Boletim';
	$path = array('controller'=> 'boletins', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Boletins'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_avd1'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_avd2'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_2_ch'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_avd3'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_avd4'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_2_ch_2'); ?></th>
			<th><?php echo $this->Paginator->sort('nota_final'); ?></th>
			<th><?php echo $this->Paginator->sort('faltas'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disciplina_id'); ?></th>
			<th class="actions text-center" style="width: 140px;"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($boletins as $boletim): ?>
	<tr>
		<td><?php echo h($boletim['Boletim']['id']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_avd1']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_avd2']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_2_ch']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_avd3']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_avd4']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_2_ch_2']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['nota_final']); ?>&nbsp;</td>
		<td><?php echo h($boletim['Boletim']['faltas']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($boletim['Aluno']['name'], array('controller' => 'alunos', 'action' => 'view', $boletim['Aluno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($boletim['Disciplina']['name'], array('controller' => 'disciplinas', 'action' => 'view', $boletim['Disciplina']['id'])); ?>
		</td>
		<td class="actions text-center">
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-eye-open\'></span>', array('action' => 'view', $boletim['Boletim']['id']), array('class'=> 'btn btn-sm btn-primary', 'title'=> 'Ver', 'escape'=> false)); ?>
			<?php echo $this->Html->link('<span class=\'glyphicon glyphicon-pencil\'></span>', array('action' => 'edit', $boletim['Boletim']['id']), array('class'=> 'btn btn-sm btn-default', 'title'=> 'Editar', 'escape'=> false)); ?>
			<?php echo $this->Form->postLink('<span class=\'glyphicon glyphicon-remove\'></span>', array('action' => 'delete', $boletim['Boletim']['id']), array('class'=> 'btn btn-sm btn-danger', 'title'=> 'Deletar', 'escape'=> false), __('Are you sure you want to delete # %s?', $boletim['Boletim']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registro(s) de um total de {:count}')));
	?>	</p>
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('<span class=\'glyphicon glyphicon-chevron-left\'></span>', array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape'=> false));
		echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));		echo $this->Paginator->next('<span class=\'glyphicon glyphicon-chevron-right\'></span>', array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape'=> false));	?>
	</div>
</div>
