<?php
App::uses('AppModel', 'Model');
/**
 * RecommendedRating Model
 *
 * @property Consumable $Consumable
 * @property Inventory $Inventory
 */
class RecommendedRating extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $validate = array(
		'rating' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite rejting!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Rejting mora biti jedinstven!'
			)
		),
	);


	public $hasMany = array(
		'Consumable' => array(
			'className' => 'Consumable',
			'foreignKey' => 'recommended_rating_id',
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
			'foreignKey' => 'recommended_rating_id',
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
