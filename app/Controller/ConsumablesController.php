<?php
App::uses('AppController', 'Controller');
/**
 * Consumables Controller
 *
 * @property Consumable $Consumable
 * @property PaginatorComponent $Paginator
 */
class ConsumablesController extends AppController {

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
		$this->Consumable->recursive = 0;
		$this->Paginator->settings = array('all',
			'limit' => 5
		);
		$this->set('consumables', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Consumable->exists($id)) {
			throw new NotFoundException(__('Invalid consumable'));
		}
		$options = array('conditions' => array('Consumable.' . $this->Consumable->primaryKey => $id));
		$this->set('consumable', $this->Consumable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->Consumable->saveConsumable($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The consumable could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The consumable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Consumable.' . $this->Consumable->primaryKey => $id));
			$consumable = $this->Consumable->find('first', $options);
			$this->request->data = $consumable;
		}
		$recommendedRatings = $this->Consumable->RecommendedRating->find('list', array('fields' => array('RecommendedRating.id', 'RecommendedRating.rating')));
		$materialStatuses = $this->Consumable->MaterialStatus->find('list', array('fields' => array('MaterialStatus.id', 'MaterialStatus.status')));
		$itemTypes = $this->Consumable->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'consumable')));
		$measurmentUnits = $this->Consumable->Item->MeasurmentUnit->find('list');
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
		$result = $this->Consumable->deleteConsumable($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The consumable could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The consumable has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {	
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['Consumable']['search_key']);

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

	   	$this->set('consumables', $this->Paginator->paginate());

    	$this->render('/Consumables/index');
    }
}
