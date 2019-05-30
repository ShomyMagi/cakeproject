<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property ItemTypes $ItemTypes
 * @property MeasurmentUnits $MeasurmentUnits
 */
class Item extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public function beforeValidate($options = array())
	{
		if(empty($this->data['Item']['code'])){
			$item_type = $this->ItemType->find('first', array(
				'conditions' => array('ItemType.id' => $this->data['Item']['item_type_id']),
				'field' => array('ItemType.code'),
				'recursive' => -1
			));
			if(!empty($item_type)){
				$item_count = $this->find('count', array(
					'conditions' => array('Item.item_type_id' => $this->data['Item']['item_type_id']),
					'recursive' => -1
				));
				$this->data['Item']['code'] = $item_type['ItemType']['code'].'-'.str_pad($item_count + 1, 4, '0', STR_PAD_LEFT);
			}
		}
		return true;
	}

	public $validate = array(
		'item_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'measurment_unit_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite naziv artikla!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Naziv artikla mora biti jedinstven!'
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
		'ItemType' => array(
			'className' => 'ItemType',
			'foreignKey' => 'item_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MeasurmentUnit' => array(
			'className' => 'MeasurmentUnit',
			'foreignKey' => 'measurment_unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
