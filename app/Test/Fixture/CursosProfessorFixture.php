<?php
/**
 * CursosProfessorFixture
 *
 */
class CursosProfessorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'professor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_curso_has_professor_professor1_idx' => array('column' => 'professor_id', 'unique' => 0),
			'fk_curso_has_professor_curso1_idx' => array('column' => 'curso_id', 'unique' => 0)
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
			'curso_id' => 1,
			'professor_id' => 1
		),
	);

}
