<?php
App::uses('Exemplar', 'Model');

/**
 * Exemplar Test Case
 *
 */
class ExemplarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exemplar',
		'app.livro',
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
		$this->Exemplar = ClassRegistry::init('Exemplar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Exemplar);

		parent::tearDown();
	}

}
