<?php
/**
 * DisciplinasProfessoreFixture
 *
 */
class DisciplinasProfessoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'professor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_professor_has_disciplina_disciplina1_idx' => array('column' => 'disciplina_id', 'unique' => 0),
			'fk_professor_has_disciplina_professor1_idx' => array('column' => 'professor_id', 'unique' => 0)
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
			'professor_id' => 1,
			'disciplina_id' => 1
		),
	);

}
