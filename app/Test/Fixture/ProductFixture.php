<?php
/**
 * Product Fixture
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hts_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tax_group' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'eccn' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'release_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'for_distributors' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'service_production' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'project' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'product_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'items_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_product_product status1_idx' => array('column' => 'product_status_id', 'unique' => 0),
			'fk_product_items1_idx' => array('column' => 'items_id', 'unique' => 0)
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
			'pid' => 1,
			'hts_number' => 'Lorem ipsum dolor sit amet',
			'tax_group' => 'Lorem ipsum dolor sit amet',
			'eccn' => 'Lorem ipsum dolor sit amet',
			'release_date' => '2018-05-17',
			'for_distributors' => 1,
			'service_production' => 1,
			'project' => 'Lorem ipsum dolor sit amet',
			'product_status_id' => 1,
			'created' => '2018-05-17',
			'modified' => '2018-05-17',
			'items_id' => 1
		),
	);

}
