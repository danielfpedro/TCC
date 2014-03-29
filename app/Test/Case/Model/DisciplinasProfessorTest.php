<?php
App::uses('DisciplinasProfessor', 'Model');

/**
 * DisciplinasProfessor Test Case
 *
 */
class DisciplinasProfessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disciplinas_professor',
		'app.disciplina',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.aluno',
		'app.alunos_curso',
		'app.cursos_disciplina',
		'app.professor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DisciplinasProfessor = ClassRegistry::init('DisciplinasProfessor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DisciplinasProfessor);

		parent::tearDown();
	}

}
