<?php
App::uses('AppController', 'Controller');
/**
 * Boletins Controller
 *
 * @property Boletim $Boletim
 * @property PaginatorComponent $Paginator
 */
class BoletinsController extends AppController {

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
		$this->Boletim->recursive = 0;
		$this->set('boletins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Boletim->exists($id)) {
			throw new NotFoundException(__('Invalid boletim'));
		}
		$options = array('conditions' => array('Boletim.' . $this->Boletim->primaryKey => $id));
		$this->set('boletim', $this->Boletim->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Boletim->create();
			if ($this->Boletim->save($this->request->data)) {
				$this->Session->setFlash(__('The boletim has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boletim could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->Boletim->Aluno->find('list');
		$disciplinas = $this->Boletim->Disciplina->find('list');
		$this->set(compact('alunos', 'disciplinas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Boletim->exists($id)) {
			throw new NotFoundException(__('Invalid boletim'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Boletim->save($this->request->data)) {
				$this->Session->setFlash(__('The boletim has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boletim could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Boletim.' . $this->Boletim->primaryKey => $id));
			$this->request->data = $this->Boletim->find('first', $options);
		}
		$alunos = $this->Boletim->Aluno->find('list');
		$disciplinas = $this->Boletim->Disciplina->find('list');
		$this->set(compact('alunos', 'disciplinas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Boletim->id = $id;
		if (!$this->Boletim->exists()) {
			throw new NotFoundException(__('Invalid boletim'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Boletim->delete()) {
			$this->Session->setFlash(__('The boletim has been deleted.'));
		} else {
			$this->Session->setFlash(__('The boletim could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Boletim->recursive = 0;
		$this->set('boletins', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Boletim->exists($id)) {
			throw new NotFoundException(__('Invalid boletim'));
		}
		$options = array('conditions' => array('Boletim.' . $this->Boletim->primaryKey => $id));
		$this->set('boletim', $this->Boletim->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Boletim->create();
			if ($this->Boletim->save($this->request->data)) {
				$this->Session->setFlash(__('The boletim has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boletim could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->Boletim->Aluno->find('list');
		$disciplinas = $this->Boletim->Disciplina->find('list');
		$this->set(compact('alunos', 'disciplinas'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Boletim->exists($id)) {
			throw new NotFoundException(__('Invalid boletim'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Boletim->save($this->request->data)) {
				$this->Session->setFlash(__('The boletim has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boletim could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Boletim.' . $this->Boletim->primaryKey => $id));
			$this->request->data = $this->Boletim->find('first', $options);
		}
		$alunos = $this->Boletim->Aluno->find('list');
		$disciplinas = $this->Boletim->Disciplina->find('list');
		$this->set(compact('alunos', 'disciplinas'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Boletim->id = $id;
		if (!$this->Boletim->exists()) {
			throw new NotFoundException(__('Invalid boletim'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Boletim->delete()) {
			$this->Session->setFlash(__('The boletim has been deleted.'));
		} else {
			$this->Session->setFlash(__('The boletim could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
