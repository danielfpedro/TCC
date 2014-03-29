<h3>Boletins</h3>

<hr>

<p>URL base que retorna o boletim da disciplina passada como parâmetro:</p>
<pre><?php echo $this->Html->link('api/boletins', $boletins_url, array('target'=> '_blank')); ?></pre>

<br>

<p>Parâmetros que podem ser passados em formato query string</p>
<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th>Parâmetro</th>
			<th>Default</th>
			<th>Restrição</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>disciplina (INT)</td>
			<td>-</td>
			<td>Obrigatório</td>
			<td>
				ID da disciplina.
			</td>
		</tr>
	</tbody>
</table>

<p>Retorno:</p>
<pre>
array(
	'erro' => false,
	'Boletim' => array(
		'disciplina_nome' => 'Matematica Discreta',
		'nota_avd1' => '6',
		'nota_avd2' => null,
		'nota_2_ch' => null,
		'nota_avd3' => null,
		'nota_avd4' => null,
		'nota_2_ch_2' => null,
		'nota_final' => null,
		'faltas' => '4'
	)
)
</pre>