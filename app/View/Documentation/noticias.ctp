<h3>Notícias</h3>

<hr>

<p>
	URL base que retorna todas as notícias referentes ao curso do aluno ou as que não se referenciam a nenhum curso:
</p>
<pre><?php echo $this->Html->link('api/noticias', $noticias_url, array('target'=> '_blank')) ?></pre>

<br>

<p>Retorno:</p>

<pre>
array(
	'erro' => false,
	'Noticia' => array(
		(int) 0 => array(
			'texto' => 'Uma notícia referente ao curso de SI.',
			'curso' => 'Sistemas de Informação',
			'autor' => 'Secretaria Sistemas de Informação',
			'created' => '2014-03-11 21:57:06'
		),
		(int) 1 => array(
			'texto' => 'Uma notícia sem referencia a um curso, aonde todos os alunos receberão.',
			'curso' => null,
			'autor' => 'Tesouraria',
			'created' => '2014-03-11 21:57:08'
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
			<td>Mínimo que a data da criação da notícia deverá ter.</td>
		</tr>
		<tr>
			<td>max_date (DATETIME)</td>
			<td>-</td>
			<td>-</td>
			<td>Máximo que a data da criação da notícia deverá ter.</td>
		</tr>
	</tbody>
</table>

<p>Para retornar uma notícia específica é necessário passar o ID da notícia após a URL base, exemplo:</p>
<pre><?php echo $this->Html->link('api/noticias/1', $noticia_url, array('target'=> '_blank')) ?></pre>

<br>

<p>Retorno:</p>
<pre>
array(
	'erro' => false,
	'Noticia' => array(
		'texto' => 'Uma notícia referente ao curso de SI.',
		'curso' => 'Sistemas de Informação',
		'autor' => 'Secretaria Sistemas de Informação',
		'created' => '2014-03-11 21:57:06'
	)
)
</pre>