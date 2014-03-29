<?php
App::uses('LivrosEmprestimo', 'Model');

/**
 * LivrosEmprestimo Test Case
 *
 */
class LivrosEmprestimoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.livros_emprestimo',
		'app.aluno',
		'app.curso',
		'app.noticia',
		'app.usuario',
		'app.evento',
		'app.cursos_disciplina',
		'app.disciplina',
		'app.professor',
		'app.boletim'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LivrosEmprestimo = ClassRegistry::init('LivrosEmprestimo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LivrosEmprestimo);

		parent::tearDown();
	}

}
