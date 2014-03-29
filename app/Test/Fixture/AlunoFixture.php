<?php
/**
 * AlunoFixture
 *
 */
class AlunoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'matricula' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'token_api_mobile' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'periodo_nu' => array('type' => 'integer', 'null' => false, 'default' => null),
		'periodo_nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_alunos_cursos1_idx' => array('column' => 'curso_id', 'unique' => 0)
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
			'matricula' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'token_api_mobile' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-03-21 00:39:19',
			'modified' => '2014-03-21 00:39:19',
			'curso_id' => 1,
			'periodo_nu' => 1,
			'periodo_nome' => 'Lorem ipsum dolor sit amet'
		),
	);

}
