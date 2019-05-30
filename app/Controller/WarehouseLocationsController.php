<?php
App::uses('AppController', 'Controller');
/**
 * WarehouseLocations Controller
 *
 * @property WarehouseLocation $WarehouseLocation
 * @property PaginatorComponent $Paginator
 */
class WarehouseLocationsController extends AppController {

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
		$this->WarehouseLocation->recursive = 0;
		$this->set('warehouseLocations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WarehouseLocation->exists($id)) {
			throw new NotFoundException(__('Invalid warehouse location'));
		}
		$options = array('conditions' => array('WarehouseLocation.' . $this->WarehouseLocation->primaryKey => $id));
		$this->set('warehouseLocation', $this->WarehouseLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WarehouseLocation->create();
			if ($this->WarehouseLocation->save($this->request->data)) {
				$this->Flash->success(__('The warehouse location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The warehouse location could not be saved. Please, try again.'));
			}
		}
		$itemTypes = $this->WarehouseLocation->ItemTypes->find('list');
		$this->set(compact('itemTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WarehouseLocation->exists($id)) {
			throw new NotFoundException(__('Invalid warehouse location'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WarehouseLocation->save($this->request->data)) {
				$this->Flash->success(__('The warehouse location has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The warehouse location could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WarehouseLocation.' . $this->WarehouseLocation->primaryKey => $id));
			$this->request->data = $this->WarehouseLocation->find('first', $options);
		}
		$itemTypes = $this->WarehouseLocation->ItemTypes->find('list');
		$this->set(compact('itemTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WarehouseLocation->id = $id;
		if (!$this->WarehouseLocation->exists()) {
			throw new NotFoundException(__('Invalid warehouse location'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WarehouseLocation->delete()) {
			$this->Flash->success(__('The warehouse location has been deleted.'));
		} else {
			$this->Flash->error(__('The warehouse location could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
