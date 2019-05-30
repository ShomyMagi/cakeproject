<?php
App::uses('AppController', 'Controller');
/**
 * Inventories Controller
 *
 * @property Inventory $Inventory
 * @property PaginatorComponent $Paginator
 */
class InventoriesController extends AppController {

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
		$this->Inventory->recursive = 0;
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('inventories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inventory->exists($id)) {
			throw new NotFoundException(__('Invalid inventory'));
		}
		$options = array('conditions' => array('Inventory.' . $this->Inventory->primaryKey => $id));
		$this->set('inventory', $this->Inventory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->Inventory->saveInventory($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The ìnventory could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The ìnventory has been saved.'));
				return $this->redirect(array('action' => 'index'));	
			}
		} else {
			$options = array('conditions' => array('Inventory.' . $this->Inventory->primaryKey => $id));
			$this->request->data = $this->Inventory->find('first', $options);
		}
		$recommendedRatings = $this->Inventory->RecommendedRating->find('list', array('fields' => array('RecommendedRating.id', 'RecommendedRating.rating')));
		$materialStatuses = $this->Inventory->MaterialStatus->find('list', array('fields' => array('MaterialStatus.id', 'MaterialStatus.status')));
		$itemTypes = $this->Inventory->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'inventory')));
		$measurmentUnits = $this->Inventory->Item->MeasurmentUnit->find('list');
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
		$result = $this->Inventory->deleteInventory($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The inventory could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The inventory has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['Inventory']['search_key']);

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

	   	$this->set('inventories', $this->Paginator->paginate());

    	$this->render('/Inventories/index');
    }
}
