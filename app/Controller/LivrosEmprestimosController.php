<?php
App::uses('AppController', 'Controller');
/**
 * LivrosEmprestimos Controller
 *
 * @property LivrosEmprestimo $LivrosEmprestimo
 * @property PaginatorComponent $Paginator
 */
class LivrosEmprestimosController extends AppController {

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
		$this->LivrosEmprestimo->recursive = 0;
		$this->set('livrosEmprestimos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LivrosEmprestimo->exists($id)) {
			throw new NotFoundException(__('Invalid livros emprestimo'));
		}
		$options = array('conditions' => array('LivrosEmprestimo.' . $this->LivrosEmprestimo->primaryKey => $id));
		$this->set('livrosEmprestimo', $this->LivrosEmprestimo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LivrosEmprestimo->create();
			if ($this->LivrosEmprestimo->save($this->request->data)) {
				$this->Session->setFlash(__('The livros emprestimo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The livros emprestimo could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->LivrosEmprestimo->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LivrosEmprestimo->exists($id)) {
			throw new NotFoundException(__('Invalid livros emprestimo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LivrosEmprestimo->save($this->request->data)) {
				$this->Session->setFlash(__('The livros emprestimo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The livros emprestimo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LivrosEmprestimo.' . $this->LivrosEmprestimo->primaryKey => $id));
			$this->request->data = $this->LivrosEmprestimo->find('first', $options);
		}
		$alunos = $this->LivrosEmprestimo->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LivrosEmprestimo->id = $id;
		if (!$this->LivrosEmprestimo->exists()) {
			throw new NotFoundException(__('Invalid livros emprestimo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LivrosEmprestimo->delete()) {
			$this->Session->setFlash(__('The livros emprestimo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The livros emprestimo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LivrosEmprestimo->recursive = 0;
		$this->set('livrosEmprestimos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LivrosEmprestimo->exists($id)) {
			throw new NotFoundException(__('Invalid livros emprestimo'));
		}
		$options = array('conditions' => array('LivrosEmprestimo.' . $this->LivrosEmprestimo->primaryKey => $id));
		$this->set('livrosEmprestimo', $this->LivrosEmprestimo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LivrosEmprestimo->create();
			if ($this->LivrosEmprestimo->save($this->request->data)) {
				$this->Session->setFlash(__('O empréstimo de livro foi salvo com sucesso.'), 'flash_info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The livros emprestimo could not be saved. Please, try again.'));
			}
		}
		$alunos = $this->LivrosEmprestimo->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LivrosEmprestimo->exists($id)) {
			throw new NotFoundException(__('Invalid livros emprestimo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LivrosEmprestimo->save($this->request->data)) {
				$this->Session->setFlash(__('O empréstimo de livro foi salvo com sucesso.'), 'flash_info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The livros emprestimo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LivrosEmprestimo.' . $this->LivrosEmprestimo->primaryKey => $id));
			$this->request->data = $this->LivrosEmprestimo->find('first', $options);
		}
		$alunos = $this->LivrosEmprestimo->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LivrosEmprestimo->id = $id;
		if (!$this->LivrosEmprestimo->exists()) {
			throw new NotFoundException(__('Invalid livros emprestimo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LivrosEmprestimo->delete()) {
			$this->Session->setFlash(__('The livros emprestimo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The livros emprestimo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
