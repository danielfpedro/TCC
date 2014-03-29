<?php
App::uses('CursosDisciplinasProfessor', 'Model');

/**
 * CursosDisciplinasProfessor Test Case
 *
 */
class CursosDisciplinasProfessorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cursos_disciplinas_professor',
		'app.cursos_professor',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.aluno',
		'app.alunos_curso',
		'app.cursos_disciplina',
		'app.disciplina',
		'app.alunos_cursos_disciplina',
		'app.professor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CursosDisciplinasProfessor = ClassRegistry::init('CursosDisciplinasProfessor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CursosDisciplinasProfessor);

		parent::tearDown();
	}

}
