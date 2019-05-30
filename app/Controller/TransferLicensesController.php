<?php
App::uses('AppController', 'Controller');
/**
 * TransferLicenses Controller
 *
 * @property TransferLicense $TransferLicense
 * @property PaginatorComponent $Paginator
 */
class TransferLicensesController extends AppController {

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
		$this->TransferLicense->recursive = 0;
		$this->set('transferLicenses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TransferLicense->exists($id)) {
			throw new NotFoundException(__('Invalid transfer license'));
		}
		$options = array('conditions' => array('TransferLicense.' . $this->TransferLicense->primaryKey => $id));
		$this->set('transferLicense', $this->TransferLicense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TransferLicense->create();
			if ($this->TransferLicense->save($this->request->data)) {
				$this->Flash->success(__('The transfer license has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The transfer license could not be saved. Please, try again.'));
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
		if (!$this->TransferLicense->exists($id)) {
			throw new NotFoundException(__('Invalid transfer license'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TransferLicense->save($this->request->data)) {
				$this->Flash->success(__('The transfer license has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The transfer license could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TransferLicense.' . $this->TransferLicense->primaryKey => $id));
			$this->request->data = $this->TransferLicense->find('first', $options);
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
		$this->TransferLicense->id = $id;
		if (!$this->TransferLicense->exists()) {
			throw new NotFoundException(__('Invalid transfer license'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TransferLicense->delete()) {
			$this->Flash->success(__('The transfer license has been deleted.'));
		} else {
			$this->Flash->error(__('The transfer license could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
