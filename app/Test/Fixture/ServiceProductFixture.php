<?php
/**
 * ServiceProduct Fixture
 */
class ServiceProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hts_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'tax_group' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'release date' => array('type' => 'date', 'null' => true, 'default' => null),
		'for_distributors' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'project' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'material_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'items_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_service product_material status1_idx' => array('column' => 'material_status_id', 'unique' => 0),
			'fk_service product_items1_idx' => array('column' => 'items_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'code' => 'Lorem ipsum dolor sit amet',
			'pid' => 1,
			'hts_number' => 1,
			'tax_group' => 'Lorem ipsum dolor sit amet',
			'release date' => '2018-05-17',
			'for_distributors' => 1,
			'project' => 'Lorem ipsum dolor sit amet',
			'material_status_id' => 1,
			'created' => '2018-05-17',
			'modified' => '2018-05-17',
			'items_id' => 1
		),
	);

}
