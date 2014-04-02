<?php
App::uses('AppController', 'Controller');

class ApiController extends AppController {

	public $aluno_id;
	public $curso_id;
	public $token;

	public $layout = 'ajax';

	public $autoRender = false;

	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
	public function beforeFilter() {
		$this->response->header('Access-Control-Allow-Origin','http://tcc-teste.aws.af.cm');
		//And use the following code if you want to allow access from any host that does not belong to your rest server domain.
		$this->response->header('Access-Control-Allow-Origin','*');
		$this->response->header('Access-Control-Allow-Methods','GET');
		$this->response->header('Access-Control-Allow-Headers','X-Requested-With');
		$this->response->header('Access-Control-Max-Age','172800');
		$this->response->type('json');

		$this->aluno_id = (!empty($this->request->query['aluno'])) ? $this->request->query['aluno'] : '';
		$this->token = (!empty($this->request->query['token'])) ? $this->request->query['token'] : '';
	}

	public function auth($matricula = null, $senha = null) {
		$this->loadModel('Aluno');

		$matricula = (empty($this->request->query['matricula']) ? null : $this->request->query['matricula']);
		$senha = (empty($this->request->query['senha']) ? null : $this->request->query['senha']);

		$conditions = array('Aluno.matricula'=> $matricula, 'Aluno.senha'=> $senha);

		$this->Aluno->recursive = -1;
		$auth = $this->Aluno->find('first', array('conditions'=> $conditions));

		$retorno = array();
		if (!empty($auth)) {
			$aluno_id = $auth['Aluno']['id'];
			//Gera o Token de acesso
			$token = $this->_generateAccesToken();

			$retorno = array('erro'=> false, 'Auth'=> array('id'=> $aluno_id, 'token'=> $token));

			//Salva o token de acesso gerado para futuras consultas
			$this->Aluno->id = $aluno_id;
			$this->Aluno->save(array('token_api_mobile'=> $token));
		} else {
			$retorno = array('erro'=> true, 'erro_descricao'=> 'Combinação matrícula/senha inválida.');
		}

		//Debugger::dump($retorno);
		echo json_encode($retorno);
		$this->autoRender = false;	
	}

	public function alunos() {
		$retorno = array();
		if ($this->_validateResquest()) {
			$this->loadModel('Aluno');

			$options = array();
			$options['conditions'] = array('Aluno.id'=> $this->aluno_id);
			$options['fields'] = array(
				'Aluno.id', 'Aluno.name', 'Curso.name', 'Aluno.periodo_nu', 'Aluno.periodo_nome');
			$this->Aluno->recursive = 1;
			$query = $this->Aluno->find('first', $options);
			
			$retorno = array();
			if (!empty($query)) {
				$aluno['nome'] = $query['Aluno']['name'];
				$aluno['curso'] = $query['Curso']['name'];
				$aluno['curso_periodo_nu'] = $query['Aluno']['periodo_nu'];
				$aluno['curso_periodo_nome'] = $query['Aluno']['periodo_nome'];
			}

			$retorno = array('erro'=> false, 'Aluno'=> $aluno);
		} else {
			$retorno = $this->_errorNotAllowed();
		}

		//Debugger::dump($retorno);
		echo json_encode($retorno);
		$this->autoRender = false;
	}

	public function disciplinas(){
		if ($this->_validateResquest()) {
			$this->loadModel('Professor');
			
			$curso_id = $this->curso_id;

			$options = array();
			$options['conditions'] = array('Curso.id'=> $curso_id);
			$options['recursive'] = 3;

			$query = $this->Professor->Disciplina->CursosDisciplina->Curso->find('all',$options);
			//Debugger::dump($query);

			$retorno = array();
			$i = 0;
			if (!empty($query)) {
				foreach ($query as $row) {
					if (!empty($row['CursosDisciplina'])) {
						foreach ($row['CursosDisciplina'] as $disciplina) {
							$retorno[$i]['id'] = $disciplina['Disciplina']['id'];
							$retorno[$i]['disciplina'] = $disciplina['Disciplina']['name'];
							$retorno[$i]['professor'] = $disciplina['Disciplina']['Professor']['name'];
							$retorno[$i]['dt_avd1'] = $disciplina['Disciplina']['dt_avd1'];
							$retorno[$i]['dt_avd2'] = $disciplina['Disciplina']['dt_avd2'];
							$retorno[$i]['dt_seg_chamada'] = $disciplina['Disciplina']['dt_seg_chamada'];
							$retorno[$i]['dt_avd3'] = $disciplina['Disciplina']['dt_avd3'];
							$retorno[$i]['dt_avd4'] = $disciplina['Disciplina']['dt_avd4'];
							$retorno[$i]['dt_seg_chamada_2'] = $disciplina['Disciplina']['dt_seg_chamada_2'];
							$i++;
						}
					}
				}
			}
			$retorno = array('erro'=> false, 'Disciplina'=> $retorno);
		} else {
			$retorno = $this->_errorNotAllowed();
		}

		//Debugger::dump($retorno);
		echo json_encode($retorno);
	}

	public function boletins(){

		$disciplina_id = (isset($this->request->query['disciplina']) ? $this->request->query['disciplina'] : NULL);

		if (empty($disciplina_id)) {
			$retorno = array('erro'=> true, 'erro_descricao'=> 'A disciplina não foi informada.');
		} elseif ($this->_validateResquest()) {
			$this->loadModel('Boletim');

			$options = array();

			$options['conditions'] = array('Boletim.aluno_id'=> $this->aluno_id, 'Boletim.disciplina_id'=> $disciplina_id);

			$this->Boletim->recursive = 1;
			$query = $this->Boletim->find('first', $options);

			$boletim = array();
			if (!empty($query)) {
				$boletim['disciplina_nome'] = $query['Disciplina']['name'];
				$boletim['nota_avd1'] = $query['Boletim']['nota_avd1'];
				$boletim['nota_avd2'] = $query['Boletim']['nota_avd2'];
				$boletim['nota_2_ch'] = $query['Boletim']['nota_2_ch'];
				$boletim['nota_avd3'] = $query['Boletim']['nota_avd3'];
				$boletim['nota_avd4'] = $query['Boletim']['nota_avd4'];
				$boletim['nota_2_ch_2'] = $query['Boletim']['nota_2_ch_2'];
				$boletim['nota_final'] = $query['Boletim']['nota_final'];
				$boletim['faltas'] = $query['Boletim']['faltas'];
			}
			$retorno = array('erro'=> false, 'Boletim'=> $boletim);
		}else {
			$retorno = $this->_errorNotAllowed();
		}
		
		//Debugger::dump($retorno);
		echo json_encode($retorno);
	}

	public function emprestimosLivros () {
		if ($this->_validateResquest()) {
			$this->loadModel('LivrosEmprestimo');
			$options = array();
			$options['conditions'] = array('LivrosEmprestimo.aluno_id'=> $this->aluno_id);
			$this->LivrosEmprestimo->recursive = -1;
			$query = $this->LivrosEmprestimo->find('all', $options);

			$emprestimos = array();
			$i = 0;
			if (!empty($query)) {
				foreach ($query as $row) {
					$emprestimos[$i]['livro_nome'] = $row['LivrosEmprestimo']['livro_nome'];
					$emprestimos[$i]['dt_emprestimo'] = $row['LivrosEmprestimo']['dt_emprestimo'];
					$emprestimos[$i]['dt_entrega'] = $row['LivrosEmprestimo']['dt_entrega'];
					$i++;
				}
			}
			$retorno = array('erro'=> false, 'EmprestimosLivro'=> $emprestimos);
			
		} else {
			$retorno  = $this->_errorNotAllowed();
		}

		//Debugger::dump($retorno);
		echo json_encode($retorno);
	}

	public function noticias($id = null){

		if ($this->_validateResquest()) {
			$this->loadModel('Noticia');

			$options = array();
			$options['fields'] = array('Noticia.texto','Noticia.created', 'Curso.name', 'Usuario.name');

			if (is_null($id)) {
				
				$options['limit'] = 20;

				if (isset($this->request->query['limit'])) {
					$options['limit'] = $this->request->query['limit'];
				}

				if (isset($this->request->query['min_date'])) {
					$options['conditions'] = array('Noticia.created >= '=> $this->request->query['min_date']);
				}

				if (isset($this->request->query['max_date'])) {
					$options['conditions'] = array('Noticia.created <= '=> $this->request->query['max_date']);
				}

				$options['conditions'] = array('OR'=>array(
					array('Noticia.curso_id'=> $this->curso_id), array('Noticia.curso_id'=> NULL)));

				$query = $this->Noticia->find('all', $options);
				foreach ($query as $row) {
					$noticias[] = $this->_formataArrayNoticias($row);
				}

				$retorno = array('erro'=> false, 'Noticia'=> $noticias);
			} else {
				$options['conditions'] = array('Noticia.id'=> $id,
					'OR'=> array(array('Noticia.curso_id'=> $this->curso_id), array('Noticia.curso_id'=> NULL)));
				$query = $this->Noticia->find('first', $options);
				$noticia = array();
				if (!empty($query)) {
					$noticia = $this->_formataArrayNoticias($query);
				}

				$retorno = array('erro'=> false, 'Noticia'=> $noticia);
			}
		} else {
			$retorno = $this->_errorNotAllowed();
		}

		//Debugger::dump($retorno);
		echo json_encode($retorno);
	}

	public function _formataArrayNoticias ($array) {
		$retorno['texto'] = $array['Noticia']['texto'];
		$retorno['curso'] = $array['Curso']['name'];
		$retorno['autor'] = $array['Usuario']['name'];
		$retorno['created'] = $array['Noticia']['created'];

		return $retorno;
	}

	public function _validateResquest() {
		$this->loadModel('Aluno');
		$this->Aluno->recursive = -1;

		$conditions = array('Aluno.id'=> $this->aluno_id, 'Aluno.token_api_mobile'=> $this->token);
		$aluno = $this->Aluno->find('first', array('conditions'=> $conditions));

		if (!empty($aluno)) {
			$this->aluno_id = $aluno['Aluno']['id'];
			$this->curso_id = $aluno['Aluno']['curso_id'];
			return true;
		} else {
			return false;
		}
	}



	public function _generateAccesToken () {
		return '123mudar';
	}

	public function getEventos() {
		if ($this->_validateResquest()) {	
			$this->loadModel('Evento');

			$options = array();
			$eventos = array();

			if (!empty($this->request->query['max_date'])) {
				$options['conditions'][] = array('Evento.dt_evento < '=> $this->request->query['max_date']);
			}
			if (!empty($this->request->query['min_date'])) {
				$options['conditions'][] = array('Evento.dt_evento > '=> $this->request->query['min_date']);
			}
			if (!empty($this->request->query['limit'])) {
				if ($this->request->query['limit'] < $limit) {
					$options['limit'] = $this->request->query['limit'];
				}
			}

			$options['limit'] = 20;
			
			$options['conditions'][] = array('OR'=> array(array('Evento.curso_id'=> $this->curso_id), array('Evento.curso_id'=> NULL)));

			$query = $this->Evento->find('all', $options);
			
			if (!empty($query)) {
				$i = 0;
				foreach ($query as $row) {
					$eventos[$i]['nome'] = $row['Evento']['name'];
					$eventos[$i]['dt_evento'] = $row['Evento']['dt_evento'];
					$i++;
				}
			}

			$retorno = array('erro'=> false, 'Evento'=> $eventos);
		} else {
			$retorno = $this->_errorNotAllowed();
		}
		//Debugger::dump($retorno);
		echo json_encode($retorno);
	}

	public function _errorNotAllowed() {
		return array('erro'=> true, 'erro_descricao'=> 'Requisição não autorizada');
	}

}