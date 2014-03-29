<h3>Empréstimos de livros</h3>

<hr>

<p>
	URL base que retorna todos os empréstimo de livro:
</p>
<pre><?php echo $this->Html->link('api/emprestimosLivros', $emprestimos_livros_url, array('target'=> '_blank')); ?></pre>

<br>


<p>Retorno:</p>
<pre>
array(
	'erro' => false,
	'EmprestimosLivro' => array(
		(int) 0 => array(
			'livro_nome' => 'Engenharia de Software e Sistemas de Informação',
			'dt_emprestimo' => '2014-03-14',
			'dt_entrega' => '2014-03-14'
		)
	)
)
</pre>