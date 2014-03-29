<?php
App::uses('Livro', 'Model');

/**
 * Livro Test Case
 *
 */
class LivroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.livro',
		'app.exemplar',
		'app.livros_emprestimo',
		'app.aluno',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.alunos_curso',
		'app.disciplina',
		'app.cursos_disciplina'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Livro = ClassRegistry::init('Livro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Livro);

		parent::tearDown();
	}

}
