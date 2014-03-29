<?php
App::uses('AlunosCursosDisciplinasPeriodo', 'Model');

/**
 * AlunosCursosDisciplinasPeriodo Test Case
 *
 */
class AlunosCursosDisciplinasPeriodoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alunos_cursos_disciplinas_periodo',
		'app.periodo',
		'app.alunos_curso',
		'app.aluno',
		'app.livros_emprestimo',
		'app.exemplar',
		'app.livro',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.disciplina',
		'app.cursos_disciplina'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlunosCursosDisciplinasPeriodo = ClassRegistry::init('AlunosCursosDisciplinasPeriodo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlunosCursosDisciplinasPeriodo);

		parent::tearDown();
	}

}
