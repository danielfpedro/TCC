<?php
App::uses('CursosDisciplina', 'Model');

/**
 * CursosDisciplina Test Case
 *
 */
class CursosDisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cursos_disciplina',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.aluno',
		'app.boletim',
		'app.disciplina',
		'app.professor',
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
		$this->CursosDisciplina = ClassRegistry::init('CursosDisciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CursosDisciplina);

		parent::tearDown();
	}

}
