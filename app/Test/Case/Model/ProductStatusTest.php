<?php
App::uses('ProductStatus', 'Model');

/**
 * ProductStatus Test Case
 */
class ProductStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_status',
		'app.good',
		'app.items',
		'app.kit',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductStatus = ClassRegistry::init('ProductStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductStatus);

		parent::tearDown();
	}

}
