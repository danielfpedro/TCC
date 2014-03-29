<?php
App::uses('Professor', 'Model');

/**
 * Professor Test Case
 *
 */
class ProfessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.professor',
		'app.disciplina',
		'app.cursos_disciplina',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.aluno',
		'app.boletim',
		'app.livros_emprestimo',
		'app.evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Professor = ClassRegistry::init('Professor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Professor);

		parent::tearDown();
	}

}
