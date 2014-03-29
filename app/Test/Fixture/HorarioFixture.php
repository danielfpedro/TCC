<?php
/**
 * HorarioFixture
 *
 */
class HorarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'dia_semana' => array('type' => 'integer', 'null' => false, 'default' => null),
		'horario' => array('type' => 'time', 'null' => false, 'default' => null),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_horarios_disciplinas1_idx' => array('column' => 'disciplina_id', 'unique' => 0)
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
			'dia_semana' => 1,
			'horario' => '00:39:21',
			'disciplina_id' => 1
		),
	);

}
