<?php
/**
 * WarehouseAddress Fixture
 */
class WarehouseAddressFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'row' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shelf' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'bulkhead' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'barcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'active' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'warehouse_locations_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_warehouse address_warehouse locations1_idx' => array('column' => 'warehouse_locations_id', 'unique' => 0)
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
			'row' => 'Lorem ipsum dolor sit amet',
			'shelf' => 1,
			'bulkhead' => 1,
			'barcode' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'warehouse_locations_id' => 1,
			'created' => '2018-05-17',
			'modified' => '2018-05-17'
		),
	);

}
