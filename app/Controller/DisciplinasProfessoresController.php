<?php
App::uses('AppController', 'Controller');
/**
 * DisciplinasProfessores Controller
 *
 * @property DisciplinasProfessor $DisciplinasProfessor
 * @property PaginatorComponent $Paginator
 */
class DisciplinasProfessoresController extends AppController {

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
		$this->DisciplinasProfessor->recursive = 0;
		$this->set('disciplinasProfessores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid disciplinas professor'));
		}
		$options = array('conditions' => array('DisciplinasProfessor.' . $this->DisciplinasProfessor->primaryKey => $id));
		$this->set('disciplinasProfessor', $this->DisciplinasProfessor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DisciplinasProfessor->create();
			if ($this->DisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplinas professor could not be saved. Please, try again.'));
			}
		}
		$disciplinas = $this->DisciplinasProfessor->Disciplina->find('list');
		$professores = $this->DisciplinasProfessor->Professor->find('list');
		$this->set(compact('disciplinas', 'professores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid disciplinas professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplinas professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DisciplinasProfessor.' . $this->DisciplinasProfessor->primaryKey => $id));
			$this->request->data = $this->DisciplinasProfessor->find('first', $options);
		}
		$disciplinas = $this->DisciplinasProfessor->Disciplina->find('list');
		$professores = $this->DisciplinasProfessor->Professor->find('list');
		$this->set(compact('disciplinas', 'professores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DisciplinasProfessor->id = $id;
		if (!$this->DisciplinasProfessor->exists()) {
			throw new NotFoundException(__('Invalid disciplinas professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DisciplinasProfessor->delete()) {
			$this->Session->setFlash(__('The disciplinas professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The disciplinas professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DisciplinasProfessor->recursive = 0;
		$this->set('disciplinasProfessores', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid disciplinas professor'));
		}
		$options = array('conditions' => array('DisciplinasProfessor.' . $this->DisciplinasProfessor->primaryKey => $id));
		$this->set('disciplinasProfessor', $this->DisciplinasProfessor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DisciplinasProfessor->create();
			if ($this->DisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplinas professor could not be saved. Please, try again.'));
			}
		}
		$disciplinas = $this->DisciplinasProfessor->Disciplina->find('list');
		$professores = $this->DisciplinasProfessor->Professor->find('list');
		$this->set(compact('disciplinas', 'professores'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->DisciplinasProfessor->exists($id)) {
			throw new NotFoundException(__('Invalid disciplinas professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DisciplinasProfessor->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplinas professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplinas professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DisciplinasProfessor.' . $this->DisciplinasProfessor->primaryKey => $id));
			$this->request->data = $this->DisciplinasProfessor->find('first', $options);
		}
		$disciplinas = $this->DisciplinasProfessor->Disciplina->find('list');
		$professores = $this->DisciplinasProfessor->Professor->find('list');
		$this->set(compact('disciplinas', 'professores'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->DisciplinasProfessor->id = $id;
		if (!$this->DisciplinasProfessor->exists()) {
			throw new NotFoundException(__('Invalid disciplinas professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DisciplinasProfessor->delete()) {
			$this->Session->setFlash(__('The disciplinas professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The disciplinas professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
