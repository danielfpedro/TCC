<?php
App::uses('AppController', 'Controller');
/**
 * Horarios Controller
 *
 * @property Horario $Horario
 * @property PaginatorComponent $Paginator
 */
class HorariosController extends AppController {

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
		$this->Horario->recursive = 0;
		$this->set('horarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Horario->exists($id)) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$options = array('conditions' => array('Horario.' . $this->Horario->primaryKey => $id));
		$this->set('horario', $this->Horario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horario->create();
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('The horario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horario could not be saved. Please, try again.'));
			}
		}
		$disciplinas = $this->Horario->Disciplina->find('list');
		$this->set(compact('disciplinas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Horario->exists($id)) {
			throw new NotFoundException(__('Invalid horario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('The horario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Horario.' . $this->Horario->primaryKey => $id));
			$this->request->data = $this->Horario->find('first', $options);
		}
		$disciplinas = $this->Horario->Disciplina->find('list');
		$this->set(compact('disciplinas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Horario->delete()) {
			$this->Session->setFlash(__('The horario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The horario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Horario->recursive = 0;
		$this->set('horarios', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Horario->exists($id)) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$options = array('conditions' => array('Horario.' . $this->Horario->primaryKey => $id));
		$this->set('horario', $this->Horario->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Horario->create();
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('The horario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horario could not be saved. Please, try again.'));
			}
		}
		$disciplinas = $this->Horario->Disciplina->find('list');
		$this->set(compact('disciplinas'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Horario->exists($id)) {
			throw new NotFoundException(__('Invalid horario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Horario->save($this->request->data)) {
				$this->Session->setFlash(__('The horario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Horario.' . $this->Horario->primaryKey => $id));
			$this->request->data = $this->Horario->find('first', $options);
		}
		$disciplinas = $this->Horario->Disciplina->find('list');
		$this->set(compact('disciplinas'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Horario->id = $id;
		if (!$this->Horario->exists()) {
			throw new NotFoundException(__('Invalid horario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Horario->delete()) {
			$this->Session->setFlash(__('The horario has been deleted.'));
		} else {
			$this->Session->setFlash(__('The horario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
