<?php
App::uses('AppController', 'Controller');

class DocumentationController extends AppController {

	public $layout = 'documentation';	

	public function beforeFilter () {
		$url_base = 'http://tcc-teste-aws.af.cm';
		$matricula_teste = '201110460';
		$senha_teste = '123mudar';
		$aluno_id_teste = 1;
		$token_teste = '123mudar';

		$credencials_teste = 'aluno=' . $aluno_id_teste . '&token=' . $token_teste;

		$auth_url = $url_base . '/api/auth/?matricula=' . $matricula_teste . '&senha=' . $senha_teste;
		$alunos_url = $url_base . '/api/alunos/?' . $credencials_teste;
		$disciplinas_url = $url_base . '/api/disciplinas/?' . $credencials_teste;
		$boletins_url = $url_base . '/api/boletins/?' . $credencials_teste;
		$emprestimos_livros_url = $url_base . '/api/emprestimosLivros/?' . $credencials_teste;
		$eventos_url = $url_base . '/api/eventos/?' . $credencials_teste;
		$noticias_url = $url_base . '/api/noticias/?' . $credencials_teste;
		$noticia_url = $url_base . '/api/noticia/1/?' . $credencials_teste;

		$this->set(compact('auth_url','alunos_url','disciplinas_url','boletins_url','eventos_url','noticias_url','noticia_url'));
	}

	public function auth () {
		
	}

	public function logout () {
		
	}

	public function alunos () {
		
	}

	public function noticias () {
		
	}
	
	public function disciplinas () {
		
	}

	public function boletins () {
		
	}

	public function emprestimosLivros () {
		
	}

	public function eventos () {
		
	}

	public function index () {
		
	}
}