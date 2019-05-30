<?php
App::uses('AppModel', 'Model');
/**
 * WarehouseLocation Model
 *
 * @property ItemTypes $ItemTypes
 */
class WarehouseLocation extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'item_types_id' => array(
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
		'ItemTypes' => array(
			'className' => 'ItemTypes',
			'foreignKey' => 'item_types_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
