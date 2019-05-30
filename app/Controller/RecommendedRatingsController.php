<?php
App::uses('AppController', 'Controller');
/**
 * RecommendedRatings Controller
 *
 * @property RecommendedRating $RecommendedRating
 * @property PaginatorComponent $Paginator
 */
class RecommendedRatingsController extends AppController {

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
		$this->RecommendedRating->recursive = 0;
		$this->set('recommendedRatings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecommendedRating->exists($id)) {
			throw new NotFoundException(__('Invalid recommended rating'));
		}
		$options = array('conditions' => array('RecommendedRating.' . $this->RecommendedRating->primaryKey => $id));
		$this->set('recommendedRating', $this->RecommendedRating->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecommendedRating->create();
			if ($this->RecommendedRating->save($this->request->data)) {
				$this->Flash->success(__('The recommended rating has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The recommended rating could not be saved. Please, try again.'));
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
		if (!$this->RecommendedRating->exists($id)) {
			throw new NotFoundException(__('Invalid recommended rating'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RecommendedRating->save($this->request->data)) {
				$this->Flash->success(__('The recommended rating has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The recommended rating could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecommendedRating.' . $this->RecommendedRating->primaryKey => $id));
			$this->request->data = $this->RecommendedRating->find('first', $options);
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
		$this->RecommendedRating->id = $id;
		if (!$this->RecommendedRating->exists()) {
			throw new NotFoundException(__('Invalid recommended rating'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RecommendedRating->delete()) {
			$this->Flash->success(__('The recommended rating has been deleted.'));
		} else {
			$this->Flash->error(__('The recommended rating could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
