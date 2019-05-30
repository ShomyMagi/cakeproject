<?php
App::uses('Kit', 'Model');

/**
 * Kit Test Case
 */
class KitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kit',
		'app.product_status',
		'app.good',
		'app.items',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kit = ClassRegistry::init('Kit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kit);

		parent::tearDown();
	}

}
