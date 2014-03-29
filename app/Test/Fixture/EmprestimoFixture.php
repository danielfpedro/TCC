<?php
/**
 * EmprestimoFixture
 *
 */
class EmprestimoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'livro_nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dt_emprestimo' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'dt_entrega' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'aluno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_emprestimos_alunos1_idx' => array('column' => 'aluno_id', 'unique' => 0)
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
			'livro_nome' => 'Lorem ipsum dolor sit amet',
			'dt_emprestimo' => '2014-03-14 12:29:45',
			'dt_entrega' => '2014-03-14 12:29:45',
			'aluno_id' => 1
		),
	);

}
