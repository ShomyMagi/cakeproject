<?php
App::uses('AppModel', 'Model');
/**
 * ServiceSupplier Model
 *
 * @property RecommendedRating $RecommendedRating
 * @property MaterialStatus $MaterialStatus
 * @property Items $Items
 */
class ServiceSupplier extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recommended_rating_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'material_status_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'item_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'RecommendedRating' => array(
			'className' => 'RecommendedRating',
			'foreignKey' => 'recommended_rating_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MaterialStatus' => array(
			'className' => 'MaterialStatus',
			'foreignKey' => 'material_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function saveServiceSupplier($form_data, $id)
	{
		$result = array();

		$dataSource = $this->getDataSource();
		$dataSource->begin();

		try
		{
			$item = array();
			$item['Item'] = $form_data['Item'];
			
			$this->Item->create();
			if(!$this->Item->save($item))
			{
				throw new Exception('Error editing item');
			}

			$serviceSupplier = array();
			$serviceSupplier['ServiceSupplier'] = $form_data['ServiceSupplier'];
			$serviceSupplier['ServiceSupplier']['id'] = $id;
			$serviceSupplier['ServiceSupplier']['item_id'] = $this->Item->id;

			$this->create();
			if(!$this->save($serviceSupplier))
			{
				throw new Exception('Error editing service supplier');
			}

			$result['success'] = true;
			$result['message'] = 'Service supplier saved';

		} catch (Exception $e) {
			$result['success'] = false;
			$result['message'] = $e->getMessage();
		}

		if($result['success'])
		{
			$dataSource->commit();
		}
		else
		{
			$dataSource->rollback();
		}

		return $result;
	}

	public function deleteServiceSupplier($id)
	{
		$result = array();

		$dataSource = $this->getDataSource();
		$dataSource->begin();

		try
		{
			$this->id = $id;
			if(!$this->exists($id))
			{
				throw new NotFoundException(__('Invalid service supplier'));
			}

			$child = $this->findById($id);
			if(!$this->Item->delete($child['Item']['id']))
			{
				throw new Exception("Error deleting service supplier");
			}

			if(!$this->delete())
			{
				throw new Exception("Error deleting service supplier");
			}

			$result['success'] = true;
			$result['message'] = 'Service supplier deleted';

		} catch(Exception $e){
			$result['success'] = false;
			$result['message'] = $e->getMessage();
		}

		if($result['success'])
		{
			$dataSource->commit();
		}
		else
		{
			$dataSource->rollback();
		}

		return $result;
	}
}
