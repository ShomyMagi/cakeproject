<?php
App::uses('AppController', 'Controller');
/**
 * ProductStatuses Controller
 *
 * @property ProductStatus $ProductStatus
 * @property PaginatorComponent $Paginator
 */
class ProductStatusesController extends AppController {

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
		$this->ProductStatus->recursive = 0;
		$this->set('productStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductStatus->exists($id)) {
			throw new NotFoundException(__('Invalid product status'));
		}
		$options = array('conditions' => array('ProductStatus.' . $this->ProductStatus->primaryKey => $id));
		$this->set('productStatus', $this->ProductStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductStatus->create();
			if ($this->ProductStatus->save($this->request->data)) {
				$this->Flash->success(__('The product status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product status could not be saved. Please, try again.'));
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
		if (!$this->ProductStatus->exists($id)) {
			throw new NotFoundException(__('Invalid product status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductStatus->save($this->request->data)) {
				$this->Flash->success(__('The product status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductStatus.' . $this->ProductStatus->primaryKey => $id));
			$this->request->data = $this->ProductStatus->find('first', $options);
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
		$this->ProductStatus->id = $id;
		if (!$this->ProductStatus->exists()) {
			throw new NotFoundException(__('Invalid product status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductStatus->delete()) {
			$this->Flash->success(__('The product status has been deleted.'));
		} else {
			$this->Flash->error(__('The product status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
