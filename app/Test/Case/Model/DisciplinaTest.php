<?php
App::uses('Disciplina', 'Model');

/**
 * Disciplina Test Case
 *
 */
class DisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Disciplina = ClassRegistry::init('Disciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Disciplina);

		parent::tearDown();
	}

}
