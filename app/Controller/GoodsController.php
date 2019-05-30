<?php
App::uses('AppController', 'Controller');
/**
 * Goods Controller
 *
 * @property Good $Good
 * @property PaginatorComponent $Paginator
 */
class GoodsController extends AppController {

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
		$this->Good->recursive = 0;
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('goods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Good->exists($id)) {
			throw new NotFoundException(__('Invalid good'));
		}
		$options = array('conditions' => array('Good.' . $this->Good->primaryKey => $id));
		$this->set('good', $this->Good->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->Good->saveGood($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The good could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The good has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Good.' . $this->Good->primaryKey => $id));
			$this->request->data = $this->Good->find('first', $options);
		}
		$productStatuses = $this->Good->ProductStatus->find('list', array('fields' => array('ProductStatus.id', 'ProductStatus.status')));
		$itemTypes = $this->Good->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'good')));
		$measurmentUnits = $this->Good->Item->MeasurmentUnit->find('list');
		$this->set(compact('productStatuses', 'itemTypes', 'measurmentUnits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id) {

		$this->request->allowMethod('post', 'delete');
		$result = $this->Good->deleteGood($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The good could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The good has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['Good']['search_key']);

	         	$conditions[] = array(
	         	"OR" => array(
	            	"Item.code LIKE" => "%".$search_key."%",
	            	"Item.name LIKE" => "%".$search_key."%",
	            	"Item.description LIKE" => "%".$search_key."%"
	            	)
	         	);
	      	}
	   	}

	   	$this->Paginator->settings = array('all',
	      	'conditions' => $conditions,
	      	'limit' => 5
	   	);

	   	$this->set('goods', $this->Paginator->paginate());

    	$this->render('/Goods/index');
    }
}
