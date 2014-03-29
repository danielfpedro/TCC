<?php
/**
 * AlunosCursoFixture
 *
 */
class AlunosCursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'aluno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_aluno_has_curso_curso1_idx' => array('column' => 'curso_id', 'unique' => 0),
			'fk_aluno_has_curso_aluno1_idx' => array('column' => 'aluno_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'aluno_id' => 1,
			'curso_id' => 1
		),
	);

}
