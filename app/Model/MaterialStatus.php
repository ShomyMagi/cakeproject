<?php
App::uses('AppModel', 'Model');
/**
 * MaterialStatus Model
 *
 * @property Consumable $Consumable
 * @property Inventory $Inventory
 * @property Material $Material
 * @property SemiProduct $SemiProduct
 * @property ServiceProduct $ServiceProduct
 */
class MaterialStatus extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $validate = array(
		'status' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite naziv statusa!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Status mora biti jedinstven!'
			)
		),
	);

	
	public $hasMany = array(
		'Consumable' => array(
			'className' => 'Consumable',
			'foreignKey' => 'material_status_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Inventory' => array(
			'className' => 'Inventory',
			'foreignKey' => 'material_status_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'material_status_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SemiProduct' => array(
			'className' => 'SemiProduct',
			'foreignKey' => 'material_status_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ServiceProduct' => array(
			'className' => 'ServiceProduct',
			'foreignKey' => 'material_status_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
