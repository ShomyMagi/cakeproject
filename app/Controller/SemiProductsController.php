<?php
App::uses('AppController', 'Controller');
/**
 * SemiProducts Controller
 *
 * @property SemiProduct $SemiProduct
 * @property PaginatorComponent $Paginator
 */
class SemiProductsController extends AppController {

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
		$this->SemiProduct->recursive = 0;
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('semiProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SemiProduct->exists($id)) {
			throw new NotFoundException(__('Invalid semi product'));
		}
		$options = array('conditions' => array('SemiProduct.' . $this->SemiProduct->primaryKey => $id));
		$this->set('semiProduct', $this->SemiProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->SemiProduct->saveSemiProduct($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The semi product could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The semi product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('SemiProduct.' . $this->SemiProduct->primaryKey => $id));
			$this->request->data = $this->SemiProduct->find('first', $options);
		}
		$materialStatuses = $this->SemiProduct->MaterialStatus->find('list', array('fields' => array('MaterialStatus.id', 'MaterialStatus.status')));
		$itemTypes = $this->SemiProduct->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'semi_product')));
		$measurmentUnits = $this->SemiProduct->Item->MeasurmentUnit->find('list');
		$this->set(compact('materialStatuses', 'itemTypes', 'measurmentUnits'));
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
		$result = $this->SemiProduct->deleteSemiProduct($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The semi product could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The semi product has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['SemiProduct']['search_key']);

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

	   	$this->set('semiProducts', $this->Paginator->paginate());

    	$this->render('/SemiProducts/index');
    }
}
