<?php
App::uses('WarehouseLocation', 'Model');

/**
 * WarehouseLocation Test Case
 */
class WarehouseLocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.warehouse_location',
		'app.item_types'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WarehouseLocation = ClassRegistry::init('WarehouseLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WarehouseLocation);

		parent::tearDown();
	}

}
