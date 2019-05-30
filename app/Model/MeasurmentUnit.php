<?php
App::uses('AppModel', 'Model');
/**
 * MeasurmentUnit Model
 *
 */
class MeasurmentUnit extends AppModel {

	public $validate = array(
		'name' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite naziv jedinice!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Jedinica mora biti jedinstvena!'
			)
		),
		'symbol' => array(
			'nameRule1' => array(
				'rule' => 'notBlank',
				'message' => 'Unesite naziv simbola!'
			),
			'nameRule2' => array(
				'rule' => 'isUnique',
				'message' => 'Simbol mora biti jedinstven!'
			)
		),
	);
}
