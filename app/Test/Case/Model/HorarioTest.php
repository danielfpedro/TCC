<?php
App::uses('Horario', 'Model');

/**
 * Horario Test Case
 *
 */
class HorarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.horario',
		'app.disciplina',
		'app.professor',
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
		$this->Horario = ClassRegistry::init('Horario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horario);

		parent::tearDown();
	}

}
