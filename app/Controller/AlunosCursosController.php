<?php
App::uses('AppController', 'Controller');
/**
 * AlunosCursos Controller
 *
 * @property AlunosCurso $AlunosCurso
 * @property PaginatorComponent $Paginator
 */
class AlunosCursosController extends AppController {

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
		$this->AlunosCurso->recursive = 0;
		$this->set('alunosCursos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AlunosCurso->exists($id)) {
			throw new NotFoundException(__('Invalid alunos curso'));
		}
		$options = array('conditions' => array('AlunosCurso.' . $this->AlunosCurso->primaryKey => $id));
		$this->set('alunosCurso', $this->AlunosCurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlunosCurso->create();
			if ($this->AlunosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos curso could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->AlunosCurso->Aluno->find('list');
		$cursos = $this->AlunosCurso->Curso->find('list');
		$this->set(compact('alunos', 'cursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AlunosCurso->exists($id)) {
			throw new NotFoundException(__('Invalid alunos curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlunosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos curso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AlunosCurso.' . $this->AlunosCurso->primaryKey => $id));
			$this->request->data = $this->AlunosCurso->find('first', $options);
		}
		$alunos = $this->AlunosCurso->Aluno->find('list');
		$cursos = $this->AlunosCurso->Curso->find('list');
		$this->set(compact('alunos', 'cursos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AlunosCurso->id = $id;
		if (!$this->AlunosCurso->exists()) {
			throw new NotFoundException(__('Invalid alunos curso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AlunosCurso->delete()) {
			$this->Session->setFlash(__('The alunos curso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alunos curso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AlunosCurso->recursive = 0;
		$this->set('alunosCursos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AlunosCurso->exists($id)) {
			throw new NotFoundException(__('Invalid alunos curso'));
		}
		$options = array('conditions' => array('AlunosCurso.' . $this->AlunosCurso->primaryKey => $id));
		$this->set('alunosCurso', $this->AlunosCurso->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AlunosCurso->create();
			if ($this->AlunosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos curso could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->AlunosCurso->Aluno->find('list');
		$cursos = $this->AlunosCurso->Curso->find('list');
		$this->set(compact('alunos', 'cursos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->AlunosCurso->exists($id)) {
			throw new NotFoundException(__('Invalid alunos curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlunosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The alunos curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alunos curso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AlunosCurso.' . $this->AlunosCurso->primaryKey => $id));
			$this->request->data = $this->AlunosCurso->find('first', $options);
		}
		$alunos = $this->AlunosCurso->Aluno->find('list');
		$cursos = $this->AlunosCurso->Curso->find('list');
		$this->set(compact('alunos', 'cursos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->AlunosCurso->id = $id;
		if (!$this->AlunosCurso->exists()) {
			throw new NotFoundException(__('Invalid alunos curso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AlunosCurso->delete()) {
			$this->Session->setFlash(__('The alunos curso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alunos curso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
