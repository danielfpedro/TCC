<h3>Eventos</h3>

<hr>

<p>
	URL base que retorna todos os eventos referentes ao curso do aluno ou as que não se referenciam a nenhum curso:
</p>
<pre><?php echo $this->Html->link('api/eventos', $eventos_url, array('target'=> '_blank')) ?></pre>

<br>

<p>Retorno:</p>

<pre>
array(
	'erro' => false,
	'Evento' => array(
		(int) 0 => array(
			'nome' => 'Palestra sobre computação em nuvem',
			'dt_evento' => '2014-03-13 20:02:00'
		),
		(int) 1 => array(
			'nome' => 'Evento geral, não relacionado a nenhum curso',
			'dt_evento' => '2014-03-13 21:09:58'
		)
	)
)
</pre>

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
			<td>limit (INT)</td>
			<td>20</td>
			<td>Deve estar entre 1 e 20</td>
			<td>Limite de notícias.</td>
		</tr>
		<tr>
			<td>min_date (DATETIME)</td>
			<td>-</td>
			<td>-</td>
			<td>Retorna somente eventos com a data menor ou igual a especificada.</td>
		</tr>
		<tr>
			<td>max_date (DATETIME)</td>
			<td>-</td>
			<td>-</td>
			<td>Retorna somente eventos com a data maior ou igual a especificada.</td>
		</tr>
	</tbody>
</table>