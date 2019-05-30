<?php
App::uses('AppController', 'Controller');
/**
 * ServiceSuppliers Controller
 *
 * @property ServiceSupplier $ServiceSupplier
 * @property PaginatorComponent $Paginator
 */
class ServiceSuppliersController extends AppController {

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
		$this->ServiceSupplier->recursive = 0;
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('serviceSuppliers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServiceSupplier->exists($id)) {
			throw new NotFoundException(__('Invalid service supplier'));
		}
		$options = array('conditions' => array('ServiceSupplier.' . $this->ServiceSupplier->primaryKey => $id));
		$this->set('serviceSupplier', $this->ServiceSupplier->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->ServiceSupplier->saveServiceSupplier($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The service supplier could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The service supplier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('ServiceSupplier.' . $this->ServiceSupplier->primaryKey => $id));
			$this->request->data = $this->ServiceSupplier->find('first', $options);
		}
		$recommendedRatings = $this->ServiceSupplier->RecommendedRating->find('list', array('fields' => array('RecommendedRating.id', 'RecommendedRating.rating')));
		$materialStatuses = $this->ServiceSupplier->MaterialStatus->find('list', array('fields' => array('MaterialStatus.id', 'MaterialStatus.status')));
		$itemTypes = $this->ServiceSupplier->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'service_supplier')));
		$measurmentUnits = $this->ServiceSupplier->Item->MeasurmentUnit->find('list');
		$this->set(compact('recommendedRatings', 'materialStatuses', 'itemTypes', 'measurmentUnits'));
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
		$result = $this->ServiceSupplier->deleteServiceSupplier($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The service supplier could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The service supplier has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['ServiceSupplier']['search_key']);

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

	   	$this->set('serviceSuppliers', $this->Paginator->paginate());

    	$this->render('/ServiceSuppliers/index');
    }
}
