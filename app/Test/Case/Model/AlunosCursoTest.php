<?php
App::uses('AlunosCurso', 'Model');

/**
 * AlunosCurso Test Case
 *
 */
class AlunosCursoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alunos_curso',
		'app.aluno',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.disciplina',
		'app.cursos_disciplina',
		'app.professor',
		'app.disciplinas_professor',
		'app.boletim'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlunosCurso = ClassRegistry::init('AlunosCurso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlunosCurso);

		parent::tearDown();
	}

}
