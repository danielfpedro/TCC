<?php
App::uses('Evento', 'Model');

/**
 * Evento Test Case
 *
 */
class EventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.aluno',
		'app.boletim',
		'app.disciplina',
		'app.professor',
		'app.cursos_disciplina',
		'app.livros_emprestimo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evento = ClassRegistry::init('Evento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evento);

		parent::tearDown();
	}

}
