<?php
App::uses('AppController', 'Controller');
/**
 * CursosProfessores Controller
 *
 * @property CursosProfessor $CursosProfessor
 * @property PaginatorComponent $Paginator
 */
class CursosProfessoresController extends AppController {

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
		$this->CursosProfessor->recursive = 0;
		$this->set('cursosProfessores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CursosProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos professor'));
		}
		$options = array('conditions' => array('CursosProfessor.' . $this->CursosProfessor->primaryKey => $id));
		$this->set('cursosProfessor', $this->CursosProfessor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CursosProfessor->create();
			if ($this->CursosProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos professor could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->CursosProfessor->Curso->find('list');
		$professores = $this->CursosProfessor->Professor->find('list');
		$this->set(compact('cursos', 'professores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CursosProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosProfessor.' . $this->CursosProfessor->primaryKey => $id));
			$this->request->data = $this->CursosProfessor->find('first', $options);
		}
		$cursos = $this->CursosProfessor->Curso->find('list');
		$professores = $this->CursosProfessor->Professor->find('list');
		$this->set(compact('cursos', 'professores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CursosProfessor->id = $id;
		if (!$this->CursosProfessor->exists()) {
			throw new NotFoundException(__('Invalid cursos professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosProfessor->delete()) {
			$this->Session->setFlash(__('The cursos professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cursos professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CursosProfessor->recursive = 0;
		$this->set('cursosProfessores', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CursosProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos professor'));
		}
		$options = array('conditions' => array('CursosProfessor.' . $this->CursosProfessor->primaryKey => $id));
		$this->set('cursosProfessor', $this->CursosProfessor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CursosProfessor->create();
			if ($this->CursosProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos professor could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->CursosProfessor->Curso->find('list');
		$professores = $this->CursosProfessor->Professor->find('list');
		$this->set(compact('cursos', 'professores'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CursosProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosProfessor.' . $this->CursosProfessor->primaryKey => $id));
			$this->request->data = $this->CursosProfessor->find('first', $options);
		}
		$cursos = $this->CursosProfessor->Curso->find('list');
		$professores = $this->CursosProfessor->Professor->find('list');
		$this->set(compact('cursos', 'professores'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CursosProfessor->id = $id;
		if (!$this->CursosProfessor->exists()) {
			throw new NotFoundException(__('Invalid cursos professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosProfessor->delete()) {
			$this->Session->setFlash(__('The cursos professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cursos professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
