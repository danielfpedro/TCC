<?php
App::uses('Noticia', 'Model');

/**
 * Noticia Test Case
 *
 */
class NoticiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticia',
		'app.usuario',
		'app.curso',
		'app.aluno',
		'app.boletim',
		'app.disciplina',
		'app.professor',
		'app.cursos_disciplina',
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
		$this->Noticia = ClassRegistry::init('Noticia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Noticia);

		parent::tearDown();
	}

}
