<?php
App::uses('AppModel', 'Model');
/**
 * Kit Model
 *
 * @property ProductStatus $ProductStatus
 * @property Items $Items
 */
class Kit extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'product_status_id' => array(
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
		'tax_group' => array(
           'taxGroupRule' => array(
               'rule' => array('taxGroupExistsValidation'),
               'message' => 'Poreska grupa nije validna!',
               'required' => true
           )

        ),
        'hts_number' => array(
           'htsNumberRule' => array(
               'rule' => array('htsNumberValidation'),
               'message' => 'HS Broj nije validan!',
               'required' => true
           )

        ),
        'pid' => array(
           'pidRule1' => array(
               'rule' => array('pidValidation'),
               'message' => 'PID proizvoda nije validan.',
               'required' => true
           ),
           'pidRule2' => array(
               'rule' => array('pidUniqueValidation'),
               'message' => 'PID proizvoda mora biti jedinstven.',
               'allowEmpty' => true
           )
    	),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ProductStatus' => array(
			'className' => 'ProductStatus',
			'foreignKey' => 'product_status_id',
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

	public function saveKit($form_data, $id)
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

			$kit = array();
			$kit['Kit'] = $form_data['Kit'];
			$kit['Kit']['id'] = $id;
			$kit['Kit']['item_id'] = $this->Item->id;

			$this->create();
			if(!$this->save($kit))
			{
				throw new Exception('Error editing kit');
			}

			$result['success'] = true;
			$result['message'] = 'Kit saved';

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

	public function deleteKit($id)
	{
		$result = array();

		$dataSource = $this->getDataSource();
		$dataSource->begin();

		try
		{
			$this->id = $id;
			if(!$this->exists($id))
			{
				throw new NotFoundException(__('Invalid kit'));
			}

			$child = $this->findById($id);
			if(!$this->Item->delete($child['Item']['id']))
			{
				throw new Exception("Error deleting item");
			}

			if(!$this->delete())
			{
				throw new Exception("Error deleting kit");
			}

			$result['success'] = true;
			$result['message'] = 'Kit deleted';

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
