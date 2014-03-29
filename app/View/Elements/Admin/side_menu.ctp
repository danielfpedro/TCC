<?php
	$controller = $this->params['controller'];

	$values = array(
		array(
			'label'=> 'Alunos',
			'controller'=> 'alunos',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Cursos',
			'controller'=> 'cursos',
			'action'=> 'index'
			),
		array(
			'label'=> 'Professores',
			'controller'=> 'professores',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Disciplinas',
			'controller'=> 'disciplinas',
			'action'=> 'index'
			),
		array(
			'label'=> 'Empréstimos de livros',
			'controller'=> 'livrosEmprestimos',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Eventos',
			'controller'=> 'eventos',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Usuarios',
			'controller'=> 'usuarios',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Notícias',
			'controller'=> 'noticias',
			'action'=> 'admin_index'
			)
		);
?>
<ul class="nav nav-pills nav-stacked">

	<?php foreach ($values as $key => $value) : ?>
		<li class="<?php echo ($controller == $value['controller'])? 'active' : ''; ?>">
			<?php
				$label = 'Alunos';
				$url = array('controller'=> $value['controller'], 'action'=> $value['action']);
				$options = array();
			
				echo $this->Html->link($value['label'], $url, $options);
			?>
		</li>
	<?php endforeach; ?>
</ul>