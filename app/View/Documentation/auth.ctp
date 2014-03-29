<h3>Auth</h3>

<hr>

<p>URL base:</p>

<pre><?php echo $this->Html->link('api/teste', $auth_url, array('target'=> '_blank')); ?></pre>

<br>

<p>Parâmetros em formato query string</p>

<table class="table table-condensed table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th>Parametro</th>
			<th>Default</th>
			<th>Restrição</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>matricula (varchar)</td>
			<td>-</td>
			<td>-</td>
			<td>
				Matrícula do aluno que se quer obter autorização.
			</td>
		</tr>
		<tr>
			<td>senha (varchar)</td>
			<td>-</td>
			<td>-</td>
			<td>
				Senha do aluno que se quer obter autorização.
			</td>
		</tr>
	</tbody>
</table>

<p>Caso a combinação matrícula/senha seja inválida será retornado:</p>
<pre>
array(
	'erro' => true,
	'erro_descricao' => 'Combinação matrícula/senha inválida.'
)
</pre>

<br>

<p>Caso a combinação matrícula/senha seja válida será retornado:</p>
<pre>
array(
	'erro' => false,
	'Auth' => array(
		'id' => '1',
		'token' => '123mudar'
	)
)
</pre>