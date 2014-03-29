<?php
	$values = array(
		array(
			'label'=> 'Como usar o Webservice',
			'controller'=> 'documentation',
			'action'=> 'index'
			),
		array(
			'label'=> 'Auth',
			'controller'=> 'documentation',
			'action'=> 'auth'
			),
		array(
			'label'=> 'Alunos',
			'controller'=> 'documentation',
			'action'=> 'alunos'
			),
		array(
			'label'=> 'Disciplinas',
			'controller'=> 'documentation',
			'action'=> 'disciplinas'
			),
		array(
			'label'=> 'Boletins',
			'controller'=> 'documentation',
			'action'=> 'boletins'
			),
		array(
			'label'=> 'Empréstimos de livro',
			'controller'=> 'documentation',
			'action'=> 'emprestimosLivros'
			),
		array(
			'label'=> 'Eventos',
			'controller'=> 'documentation',
			'action'=> 'eventos'
			),
		array(
			'label'=> 'Notícias',
			'controller'=> 'documentation',
			'action'=> 'noticias'
			),
		);
?>
<ul class="nav nav-pills nav-stacked">
	<?php foreach ($values as $key => $value) : ?>
		<li class="<?php echo ($this->params['action'] == $value['action']) ? 'active' : ''; ?>">
			<?php
				$label = 'Alunos';
				$url = array('controller'=> $value['controller'], 'action'=> $value['action']);
				$options = array();
			
				echo $this->Html->link($value['label'], $url, $options);
			?>
		</li>
	<?php endforeach; ?>
</ul>