<?php
App::uses('AppModel', 'Model');
/**
 * ProductStatus Model
 *
 * @property Good $Good
 * @property Kit $Kit
 * @property Product $Product
 */
class ProductStatus extends AppModel {


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
		'Good' => array(
			'className' => 'Good',
			'foreignKey' => 'product_status_id',
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
		'Kit' => array(
			'className' => 'Kit',
			'foreignKey' => 'product_status_id',
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
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_status_id',
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
