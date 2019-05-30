<?php
App::uses('AppController', 'Controller');
/**
 * ServiceProducts Controller
 *
 * @property ServiceProduct $ServiceProduct
 * @property PaginatorComponent $Paginator
 */
class ServiceProductsController extends AppController {

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
		$this->ServiceProduct->recursive = 0;
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('serviceProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServiceProduct->exists($id)) {
			throw new NotFoundException(__('Invalid service product'));
		}
		$options = array('conditions' => array('ServiceProduct.' . $this->ServiceProduct->primaryKey => $id));
		$this->set('serviceProduct', $this->ServiceProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->ServiceProduct->saveServiceProduct($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The service product could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The service product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('ServiceProduct.' . $this->ServiceProduct->primaryKey => $id));
			$this->request->data = $this->ServiceProduct->find('first', $options);
		}
		$materialStatuses = $this->ServiceProduct->MaterialStatus->find('list', array('fields' => array('MaterialStatus.id', 'MaterialStatus.status')));
		$itemTypes = $this->ServiceProduct->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'service_product')));
		$measurmentUnits = $this->ServiceProduct->Item->MeasurmentUnit->find('list');
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
		$result = $this->ServiceProduct->deleteServiceProduct($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The service product could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The service product has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['ServiceProduct']['search_key']);

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

	   	$this->set('serviceProducts', $this->Paginator->paginate());

    	$this->render('/ServiceProducts/index');
    }
}
