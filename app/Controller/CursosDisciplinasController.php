<?php
App::uses('AppController', 'Controller');
/**
 * CursosDisciplinas Controller
 *
 * @property CursosDisciplina $CursosDisciplina
 * @property PaginatorComponent $Paginator
 */
class CursosDisciplinasController extends AppController {

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
		$this->CursosDisciplina->recursive = 0;
		$this->set('cursosDisciplinas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplina'));
		}
		$options = array('conditions' => array('CursosDisciplina.' . $this->CursosDisciplina->primaryKey => $id));
		$this->set('cursosDisciplina', $this->CursosDisciplina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CursosDisciplina->create();
			if ($this->CursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplina could not be saved. Please, try again.'));
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
		if (!$this->CursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosDisciplina.' . $this->CursosDisciplina->primaryKey => $id));
			$this->request->data = $this->CursosDisciplina->find('first', $options);
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
		$this->CursosDisciplina->id = $id;
		if (!$this->CursosDisciplina->exists()) {
			throw new NotFoundException(__('Invalid cursos disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosDisciplina->delete()) {
			$this->Session->setFlash(__('The cursos disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cursos disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CursosDisciplina->recursive = 0;
		$this->set('cursosDisciplinas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplina'));
		}
		$options = array('conditions' => array('CursosDisciplina.' . $this->CursosDisciplina->primaryKey => $id));
		$this->set('cursosDisciplina', $this->CursosDisciplina->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CursosDisciplina->create();
			if ($this->CursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplina could not be saved. Please, try again.'));
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
		if (!$this->CursosDisciplina->exists($id)) {
			throw new NotFoundException(__('Invalid cursos disciplina'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CursosDisciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The cursos disciplina has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cursos disciplina could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CursosDisciplina.' . $this->CursosDisciplina->primaryKey => $id));
			$this->request->data = $this->CursosDisciplina->find('first', $options);
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
		$this->CursosDisciplina->id = $id;
		if (!$this->CursosDisciplina->exists()) {
			throw new NotFoundException(__('Invalid cursos disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CursosDisciplina->delete()) {
			$this->Session->setFlash(__('The cursos disciplina has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cursos disciplina could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
