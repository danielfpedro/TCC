<?php
/**
 * CursosDisciplinasProfessorFixture
 *
 */
class CursosDisciplinasProfessorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'cursos_professor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cursos_disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_cursos_disciplinas_professores_cursos_professores1_idx' => array('column' => 'cursos_professor_id', 'unique' => 0),
			'fk_cursos_disciplinas_professores_cursos_disciplinas1_idx' => array('column' => 'cursos_disciplina_id', 'unique' => 0)
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
			'cursos_professor_id' => 1,
			'cursos_disciplina_id' => 1
		),
	);

}
