<?php
/**
 * DisciplinaFixture
 *
 */
class DisciplinaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'dt_avd1' => array('type' => 'date', 'null' => true, 'default' => null),
		'dt_avd2' => array('type' => 'date', 'null' => true, 'default' => null),
		'dt_seg_chamada' => array('type' => 'date', 'null' => true, 'default' => null),
		'dt_avd3' => array('type' => 'date', 'null' => true, 'default' => null),
		'dt_avd4' => array('type' => 'date', 'null' => true, 'default' => null),
		'dt_seg_chamada_2' => array('type' => 'date', 'null' => true, 'default' => null),
		'dt_final' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'professor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_disciplinas_professores1_idx' => array('column' => 'professor_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-03-21 00:39:20',
			'created' => '2014-03-21 00:39:20',
			'dt_avd1' => '2014-03-21',
			'dt_avd2' => '2014-03-21',
			'dt_seg_chamada' => '2014-03-21',
			'dt_avd3' => '2014-03-21',
			'dt_avd4' => '2014-03-21',
			'dt_seg_chamada_2' => '2014-03-21',
			'dt_final' => '2014-03-21 00:39:20',
			'professor_id' => 1
		),
	);

}
