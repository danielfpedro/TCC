<div style="min-height: 700px;">

<h3>Como usar o Webservice</h3>
<hr>
<p>
	O webservice exige que sejam passados em formato query string o ID do aluno e o token de acesso para todas as requisições feitas. Essas credenciais são obtidas através do <?php echo $this->Html->link('método Auth', array('action'=> 'auth')); ?>.
</p>

<br>

<p>Exemplo:</p>
<pre>
api/disciplinas/?aluno=1&token=D87msaOe9023POsXpz
</pre>

<br>

<p>
	As requisições sempre retornarão um array com a primeira chave <code>erro</code> contendo um valor boolean. Caso o valor da primeira chave seja <code>true</code>, a segunda chave sera <code>erro_descricao</code> com o seu valor sendo a descrição do erro, caso contrário a segunda chave será o nome do Model requisitado e valor será os seus respectivos valores.
</p>

<div class="alert alert-info">
	<strong>Informação:</strong>
	<br>
	Para teste usar ID do aluno <strong>1</strong> e o token será <strong>123mudar</strong>.
</div>

</div>