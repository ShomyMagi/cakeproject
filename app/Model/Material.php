<?php
App::uses('AppModel', 'Model');
/**
 * Material Model
 *
 * @property RecommendedRating $RecommendedRating
 * @property MaterialStatus $MaterialStatus
 * @property Items $Items
 */
class Material extends AppModel {

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

	//jedna funkcija za dodavanje i editovanje materijala
	public function saveMaterial($form_data, $id = null)
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

			$material = array();
			$material['Material'] = $form_data['Material'];
			$material['Material']['id'] = $id;
			$material['Material']['item_id'] = $this->Item->id;

			$this->create();
			if(!$this->save($material))
			{
				throw new Exception('Error editing material');
			}

			$result['success'] = true;
			$result['message'] = 'Material saved';

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

	//funckija za brisanje itema i materijala
	public function deleteMaterial($id)
	{
		$result = array();

		$dataSource = $this->getDataSource();
		$dataSource->begin();

		try
		{
			$this->id = $id;
			if(!$this->exists($id))
			{
				throw new NotFoundException(__('Invalid material'));
			}

			//Brisemo child
			$child = $this->findById($id);
			if(!$this->Item->delete($child['Item']['id']))
			{
				throw new Exception("Error deleting item");
			}

			//brisemo parent
			if(!$this->delete())
			{
				throw new Exception("Error deleting material");
			}

			//true
			$result['success'] = true;
			$result['message'] = 'Material deleted';

			//hvatamo exception - false
		} catch(Exception $e){
			$result['success'] = false;
			$result['message'] = $e->getMessage();
		}

		//ako je $result dobar
		if($result['success'])
		{
			$dataSource->commit();
		}
		//ako nije vrati
		else
		{
			$dataSource->rollback();
		}

		return $result;
	}
}
