<?php
/**
 * BoletimFixture
 *
 */
class BoletimFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'boletim';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nota_avd1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'nota_avd2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'nota_2_ch' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'nota_avd3' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,1'),
		'nota_avd4' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,1'),
		'nota_2_ch_2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,1'),
		'nota_final' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'faltas' => array('type' => 'integer', 'null' => false, 'default' => null),
		'aluno_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_boletim_alunos1_idx' => array('column' => 'aluno_id', 'unique' => 0),
			'fk_boletim_disciplinas1_idx' => array('column' => 'disciplina_id', 'unique' => 0)
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
			'nota_avd1' => 1,
			'nota_avd2' => 1,
			'nota_2_ch' => 1,
			'nota_avd3' => 1,
			'nota_avd4' => 1,
			'nota_2_ch_2' => 1,
			'nota_final' => 1,
			'faltas' => 1,
			'aluno_id' => 1,
			'disciplina_id' => 1
		),
	);

}
