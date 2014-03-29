<?php
App::uses('AppController', 'Controller');
/**
 * Professores Controller
 *
 * @property Professor $Professor
 * @property PaginatorComponent $Paginator
 */
class ProfessoresController extends AppController {

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
		$this->Professor->recursive = 0;
		$this->set('professores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Professor->exists($id)) {
			throw new NotFoundException(__('Invalid professor'));
		}
		$options = array('conditions' => array('Professor.' . $this->Professor->primaryKey => $id));
		$this->set('professor', $this->Professor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Professor->create();
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash(__('The professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professor could not be saved. Please, try again.'));
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
		if (!$this->Professor->exists($id)) {
			throw new NotFoundException(__('Invalid professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash(__('The professor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Professor.' . $this->Professor->primaryKey => $id));
			$this->request->data = $this->Professor->find('first', $options);
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
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException(__('Invalid professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Professor->delete()) {
			$this->Session->setFlash(__('The professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Professor->recursive = 0;
		$this->set('professores', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Professor->exists($id)) {
			throw new NotFoundException(__('Invalid professor'));
		}
		$options = array('conditions' => array('Professor.' . $this->Professor->primaryKey => $id));
		$this->set('professor', $this->Professor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Professor->create();
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash(__('O professor foi salvo com sucesso.'), 'flash_info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professor could not be saved. Please, try again.'));
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
		if (!$this->Professor->exists($id)) {
			throw new NotFoundException(__('Invalid professor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash(__('O professor foi salvo com sucesso.'), 'flash_info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Professor.' . $this->Professor->primaryKey => $id));
			$this->request->data = $this->Professor->find('first', $options);
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
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException(__('Invalid professor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Professor->delete()) {
			$this->Session->setFlash(__('The professor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The professor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
