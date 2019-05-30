<?php
App::uses('AppModel', 'Model');
/**
 * ItemType Model
 *
 */
class ItemType extends AppModel {

	public $validate = array(
		'name' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite naziv tipa artikla!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Tip artikla mora biti jedinstven!'
			)
		),
		'code' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite naziv koda!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Kod mora biti jedinstven!'
			)
		),
		'class' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Izaberite klasu!'
			),
		),
	);
}
