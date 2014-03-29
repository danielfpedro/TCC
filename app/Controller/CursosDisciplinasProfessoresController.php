<?php
App::uses('AppController', 'Controller');
/**
 * CursosDisciplinasProfessores Controller
 *
 * @property CursosDisciplinasProfessor $CursosDisciplinasProfessor
 * @property PaginatorComponent $Paginator
 */
class CursosDisciplinasProfessoresController extends AppController {

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
		$this->CursosDisciplinasProfessor->recursive = 0;
		$this->set('cursosDisciplinasProfessores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CursosDisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplinas professor'));
		}
		$options = array('conditions' => array('CursosDisciplinasProfessor.' . $this->CursosDisciplinasProfessor->primaryKey => $id));
		$this->set('cursosDisciplinasProfessor', $this->CursosDisciplinasProfessor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CursosDisciplinasProfessor->create();
			if ($this->CursosDisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplinas professor could not be saved. Please, try again.'));
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
		if (!$this->CursosDisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplinas professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosDisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplinas professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosDisciplinasProfessor.' . $this->CursosDisciplinasProfessor->primaryKey => $id));
			$this->request->data = $this->CursosDisciplinasProfessor->find('first', $options);
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
		$this->CursosDisciplinasProfessor->id = $id;
		if (!$this->CursosDisciplinasProfessor->exists()) {
			throw new NotFoundException(__('Invalid cursos disciplinas professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosDisciplinasProfessor->delete()) {
			$this->Session->setFlash(__('The cursos disciplinas professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cursos disciplinas professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CursosDisciplinasProfessor->recursive = 0;
		$this->set('cursosDisciplinasProfessores', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CursosDisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplinas professor'));
		}
		$options = array('conditions' => array('CursosDisciplinasProfessor.' . $this->CursosDisciplinasProfessor->primaryKey => $id));
		$this->set('cursosDisciplinasProfessor', $this->CursosDisciplinasProfessor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CursosDisciplinasProfessor->create();
			if ($this->CursosDisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplinas professor could not be saved. Please, try again.'));
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
		if (!$this->CursosDisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplinas professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosDisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplinas professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosDisciplinasProfessor.' . $this->CursosDisciplinasProfessor->primaryKey => $id));
			$this->request->data = $this->CursosDisciplinasProfessor->find('first', $options);
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
		$this->CursosDisciplinasProfessor->id = $id;
		if (!$this->CursosDisciplinasProfessor->exists()) {
			throw new NotFoundException(__('Invalid cursos disciplinas professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosDisciplinasProfessor->delete()) {
			$this->Session->setFlash(__('The cursos disciplinas professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cursos disciplinas professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
