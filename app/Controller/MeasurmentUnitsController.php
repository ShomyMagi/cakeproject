<?php
App::uses('AppController', 'Controller');
/**
 * MeasurmentUnits Controller
 *
 * @property MeasurmentUnit $MeasurmentUnit
 * @property PaginatorComponent $Paginator
 */
class MeasurmentUnitsController extends AppController {

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
		$this->MeasurmentUnit->recursive = 0;
		$this->set('measurmentUnits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MeasurmentUnit->exists($id)) {
			throw new NotFoundException(__('Invalid measurment unit'));
		}
		$options = array('conditions' => array('MeasurmentUnit.' . $this->MeasurmentUnit->primaryKey => $id));
		$this->set('measurmentUnit', $this->MeasurmentUnit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeasurmentUnit->create();
			if ($this->MeasurmentUnit->save($this->request->data)) {
				$this->Flash->success(__('The measurment unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The measurment unit could not be saved. Please, try again.'));
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
		if (!$this->MeasurmentUnit->exists($id)) {
			throw new NotFoundException(__('Invalid measurment unit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeasurmentUnit->save($this->request->data)) {
				$this->Flash->success(__('The measurment unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The measurment unit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeasurmentUnit.' . $this->MeasurmentUnit->primaryKey => $id));
			$this->request->data = $this->MeasurmentUnit->find('first', $options);
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
		$this->MeasurmentUnit->id = $id;
		if (!$this->MeasurmentUnit->exists()) {
			throw new NotFoundException(__('Invalid measurment unit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MeasurmentUnit->delete()) {
			$this->Flash->success(__('The measurment unit has been deleted.'));
		} else {
			$this->Flash->error(__('The measurment unit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
