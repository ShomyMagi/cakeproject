<?php
/**
 * Kit Fixture
 */
class KitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pid' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hts_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'tax_group' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kit_release_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'for_distributors' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'hide_kit_content' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'product_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'items_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_kit_product status1_idx' => array('column' => 'product_status_id', 'unique' => 0),
			'fk_kit_items1_idx' => array('column' => 'items_id', 'unique' => 0)
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
			'status' => 'Lorem ipsum dolor sit amet',
			'pid' => 1,
			'hts_number' => 1,
			'tax_group' => 'Lorem ipsum dolor sit amet',
			'kit_release_date' => '2018-05-17',
			'for_distributors' => 1,
			'hide_kit_content' => 1,
			'product_status_id' => 1,
			'created' => '2018-05-17',
			'modified' => '2018-05-17',
			'items_id' => 1
		),
	);

}
