<h3>Alunos</h3>

<hr>

<p>URL base:</p>
<pre><?php echo $this->Html->link('api/alunos', $alunos_url, array('target'=> '_blank')); ?></pre>

<br>

<p>Retorno:</p>
<pre>
array(
	'erro' => false,
	'Aluno' => array(
		'nome' => 'Daniel de Faria Pedro',
		'curso' => 'Sistemas de Informação',
		'curso_periodo_nu' => '5',
		'curso_periodo_nome' => 'periodo'
	)
)
</pre>