<?php
App::uses('AppController', 'Controller');
/**
 * Disciplinas Controller
 *
 * @property Disciplina $Disciplina
 * @property PaginatorComponent $Paginator
 */
class DisciplinasController extends AppController {

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
		$this->Disciplina->recursive = 0;
		$this->set('disciplinas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Disciplina->exists($id)) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		$options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
		$this->set('disciplina', $this->Disciplina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
			}
		}
		$professores = $this->Disciplina->Professor->find('list');
		$cursos = $this->Disciplina->Curso->find('list');
		$this->set(compact('professores', 'cursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Disciplina->exists($id)) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
			$this->request->data = $this->Disciplina->find('first', $options);
		}
		$professores = $this->Disciplina->Professor->find('list');
		$cursos = $this->Disciplina->Curso->find('list');
		$this->set(compact('professores', 'cursos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Disciplina->id = $id;
		if (!$this->Disciplina->exists()) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Disciplina->delete()) {
			$this->Session->setFlash(__('The disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Disciplina->recursive = 0;
		$this->set('disciplinas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Disciplina->exists($id)) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		$options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
		$this->set('disciplina', $this->Disciplina->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('A disciplina foi salva com sucesso.'), 'flash_info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
			}
		}
		$professores = $this->Disciplina->Professor->find('list');
		$cursos = $this->Disciplina->Curso->find('list');
		$this->set(compact('professores', 'cursos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Disciplina->exists($id)) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('A disciplina foi salva com sucesso.'), 'flash_info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
			$this->request->data = $this->Disciplina->find('first', $options);
		}
		$professores = $this->Disciplina->Professor->find('list');
		$cursos = $this->Disciplina->Curso->find('list');
		$this->set(compact('professores', 'cursos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Disciplina->id = $id;
		if (!$this->Disciplina->exists()) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Disciplina->delete()) {
			$this->Session->setFlash(__('The disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
