<?php
/**
 * AlunosCursosDisciplinasPeriodoFixture
 *
 */
class AlunosCursosDisciplinasPeriodoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'periodo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nota_avd1' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'nota_avd2' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'nota_2_ch' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'nota_final' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'alunos_curso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cursos_disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_alunos_cursos_disciplinas_periodos1_idx' => array('column' => 'periodo_id', 'unique' => 0),
			'fk_alunos_cursos_disciplinas_periodos_alunos_cursos1_idx' => array('column' => 'alunos_curso_id', 'unique' => 0),
			'fk_alunos_cursos_disciplinas_periodos_disciplinas_cursos1_idx' => array('column' => 'cursos_disciplina_id', 'unique' => 0)
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
			'periodo_id' => 1,
			'nota_avd1' => 1,
			'nota_avd2' => 1,
			'nota_2_ch' => 1,
			'nota_final' => 1,
			'alunos_curso_id' => 1,
			'cursos_disciplina_id' => 1
		),
	);

}
