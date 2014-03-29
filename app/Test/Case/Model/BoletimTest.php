<?php
App::uses('Boletim', 'Model');

/**
 * Boletim Test Case
 *
 */
class BoletimTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.boletim',
		'app.aluno',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.evento',
		'app.cursos_disciplina',
		'app.disciplina',
		'app.professor',
		'app.livros_emprestimo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Boletim = ClassRegistry::init('Boletim');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Boletim);

		parent::tearDown();
	}

}
