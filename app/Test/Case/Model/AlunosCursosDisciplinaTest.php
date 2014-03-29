<?php
App::uses('AlunosCursosDisciplina', 'Model');

/**
 * AlunosCursosDisciplina Test Case
 *
 */
class AlunosCursosDisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alunos_cursos_disciplina',
		'app.alunos_curso',
		'app.aluno',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.cursos_disciplina',
		'app.disciplina',
		'app.professor',
		'app.cursos_disciplinas_professor',
		'app.cursos_professor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlunosCursosDisciplina = ClassRegistry::init('AlunosCursosDisciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlunosCursosDisciplina);

		parent::tearDown();
	}

}
