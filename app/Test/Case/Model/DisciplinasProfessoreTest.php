<?php
App::uses('DisciplinasProfessore', 'Model');

/**
 * DisciplinasProfessore Test Case
 *
 */
class DisciplinasProfessoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disciplinas_professore',
		'app.professor',
		'app.disciplina',
		'app.curso',
		'app.noticia',
		'app.aluno',
		'app.livros_emprestimo',
		'app.alunos_curso',
		'app.cursos_disciplina'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DisciplinasProfessore = ClassRegistry::init('DisciplinasProfessore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DisciplinasProfessore);

		parent::tearDown();
	}

}
