<h3>Disciplinas</h3>

<hr>

<p>URL base que retorna todas as disciplinas referentes ao período atual que o aluno está cursando:</p>
<pre><?php echo $this->Html->link('api/disciplinas', $disciplinas_url, array('target'=> '_blank')) ?></pre>

<br>

<p>Retorno:</p>
<pre>
array(
	'erro' => false,
	'Disciplina' => array(
		(int) 0 => array(
			'id' => '1',
			'disciplina' => 'Matematica Discreta',
			'professor' => 'Clifford',
			'dt_avd1' => null,
			'dt_avd2' => null,
			'dt_seg_chamada' => null,
			'dt_avd3' => null,
			'dt_avd4' => null,
			'dt_seg_chamada_2' => null
		),
		(int) 1 => array(
			'id' => '2',
			'disciplina' => 'Ética',
			'professor' => 'Rita',
			'dt_avd1' => '2019-01-03',
			'dt_avd2' => '2030-03-03',
			'dt_seg_chamada' => '2020-04-15',
			'dt_avd3' => null,
			'dt_avd4' => null,
			'dt_seg_chamada_2' => null
		),
		(int) 2 => array(
			'id' => '7',
			'disciplina' => 'POOII',
			'professor' => 'Rosenclever',
			'dt_avd1' => '2014-03-18',
			'dt_avd2' => '2014-03-18',
			'dt_seg_chamada' => '2014-03-18',
			'dt_avd3' => null,
			'dt_avd4' => null,
			'dt_seg_chamada_2' => null
		)
	)
)
</pre>