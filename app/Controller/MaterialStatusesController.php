<?php
App::uses('AppController', 'Controller');
/**
 * MaterialStatuses Controller
 *
 * @property MaterialStatus $MaterialStatus
 * @property PaginatorComponent $Paginator
 */
class MaterialStatusesController extends AppController {

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
		$this->MaterialStatus->recursive = 0;
		$this->set('materialStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaterialStatus->exists($id)) {
			throw new NotFoundException(__('Invalid material status'));
		}
		$options = array('conditions' => array('MaterialStatus.' . $this->MaterialStatus->primaryKey => $id));
		$this->set('materialStatus', $this->MaterialStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaterialStatus->create();
			if ($this->MaterialStatus->save($this->request->data)) {
				$this->Flash->success(__('The material status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The material status could not be saved. Please, try again.'));
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
		if (!$this->MaterialStatus->exists($id)) {
			throw new NotFoundException(__('Invalid material status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MaterialStatus->save($this->request->data)) {
				$this->Flash->success(__('The material status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The material status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaterialStatus.' . $this->MaterialStatus->primaryKey => $id));
			$this->request->data = $this->MaterialStatus->find('first', $options);
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
		$this->MaterialStatus->id = $id;
		if (!$this->MaterialStatus->exists()) {
			throw new NotFoundException(__('Invalid material status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MaterialStatus->delete()) {
			$this->Flash->success(__('The material status has been deleted.'));
		} else {
			$this->Flash->error(__('The material status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
