<?php
App::uses('AppController', 'Controller');
/**
 * AlunosCursosDisciplinas Controller
 *
 * @property AlunosCursosDisciplina $AlunosCursosDisciplina
 * @property PaginatorComponent $Paginator
 */
class AlunosCursosDisciplinasController extends AppController {

public $layout = 'admin';	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AlunosCursosDisciplina->recursive = 0;
		$this->set('alunosCursosDisciplinas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AlunosCursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid alunos cursos disciplina'));
		}
		$options = array('conditions' => array('AlunosCursosDisciplina.' . $this->AlunosCursosDisciplina->primaryKey => $id));
		$this->set('alunosCursosDisciplina', $this->AlunosCursosDisciplina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlunosCursosDisciplina->create();
			if ($this->AlunosCursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos cursos disciplina could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AlunosCursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid alunos cursos disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlunosCursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos cursos disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AlunosCursosDisciplina.' . $this->AlunosCursosDisciplina->primaryKey => $id));
			$this->request->data = $this->AlunosCursosDisciplina->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AlunosCursosDisciplina->id = $id;
		if (!$this->AlunosCursosDisciplina->exists()) {
			throw new NotFoundException(__('Invalid alunos cursos disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AlunosCursosDisciplina->delete()) {
			$this->Session->setFlash(__('The alunos cursos disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alunos cursos disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AlunosCursosDisciplina->recursive = 0;
		$this->set('alunosCursosDisciplinas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AlunosCursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid alunos cursos disciplina'));
		}
		$options = array('conditions' => array('AlunosCursosDisciplina.' . $this->AlunosCursosDisciplina->primaryKey => $id));
		$this->set('alunosCursosDisciplina', $this->AlunosCursosDisciplina->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AlunosCursosDisciplina->create();
			if ($this->AlunosCursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos cursos disciplina could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AlunosCursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid alunos cursos disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlunosCursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos cursos disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AlunosCursosDisciplina.' . $this->AlunosCursosDisciplina->primaryKey => $id));
			$this->request->data = $this->AlunosCursosDisciplina->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AlunosCursosDisciplina->id = $id;
		if (!$this->AlunosCursosDisciplina->exists()) {
			throw new NotFoundException(__('Invalid alunos cursos disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AlunosCursosDisciplina->delete()) {
			$this->Session->setFlash(__('The alunos cursos disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alunos cursos disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
