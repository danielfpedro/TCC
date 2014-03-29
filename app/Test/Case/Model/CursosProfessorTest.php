<?php
App::uses('CursosProfessor', 'Model');

/**
 * CursosProfessor Test Case
 *
 */
class CursosProfessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cursos_professor',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.aluno',
		'app.alunos_curso',
		'app.cursos_disciplina',
		'app.disciplina',
		'app.alunos_cursos_disciplina',
		'app.professor',
		'app.cursos_disciplinas_professor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CursosProfessor = ClassRegistry::init('CursosProfessor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CursosProfessor);

		parent::tearDown();
	}

}
