<?php
App::uses('AppController', 'Controller');
/**
 * Kits Controller
 *
 * @property Kit $Kit
 * @property PaginatorComponent $Paginator
 */
class KitsController extends AppController {

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
		$this->Kit->recursive = 0;
		$this->set('kits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kit->exists($id)) {
			throw new NotFoundException(__('Invalid kit'));
		}
		$options = array('conditions' => array('Kit.' . $this->Kit->primaryKey => $id));
		$this->set('kit', $this->Kit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function save($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->Kit->saveKit($this->request->data, $id);
			if(!$result['success'])
			{
				$this->Flash->error(__('The kit could not be saved. Error: '.$result['message']));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Flash->success(__('The kit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Kit.' . $this->Kit->primaryKey => $id));
			$this->request->data = $this->Kit->find('first', $options);
		}
		$productStatuses = $this->Kit->ProductStatus->find('list', array('fields' => array('ProductStatus.id', 'ProductStatus.status')));
		$itemTypes = $this->Kit->Item->ItemType->find('list', array('conditions' => array('ItemType.class' => 'kit')));
		$measurmentUnits = $this->Kit->Item->MeasurmentUnit->find('list');
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
		$result = $this->Kit->deleteKit($id);
		if(!$result['success'])
		{
			$this->Flash->error(__('The kit could not be deleted. Error: '.$result['message']));
			return $this->redirect(array('action' => 'index'));
		}
		else
		{
			$this->Flash->success(__('The kit has been deleted.'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function search()
    {
    	if ($this->request->is('post'))
	   	{
	      	if(!empty($this->request->data) && isset($this->request->data) )
	      	{
	         	$search_key = trim($this->request->data['Kit']['search_key']);

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

	   	$this->set('kits', $this->Paginator->paginate());

    	$this->render('/Kits/index');
    }
}
