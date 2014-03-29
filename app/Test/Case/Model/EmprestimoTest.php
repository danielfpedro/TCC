<?php
App::uses('Emprestimo', 'Model');

/**
 * Emprestimo Test Case
 *
 */
class EmprestimoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.emprestimo',
		'app.aluno',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.evento',
		'app.cursos_disciplina',
		'app.disciplina',
		'app.professor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Emprestimo = ClassRegistry::init('Emprestimo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Emprestimo);

		parent::tearDown();
	}

}
