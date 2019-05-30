<?php
App::uses('ServiceProduct', 'Model');

/**
 * ServiceProduct Test Case
 */
class ServiceProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_product',
		'app.material_status',
		'app.consumable',
		'app.recommended_rating',
		'app.inventory',
		'app.items',
		'app.material',
		'app.semi_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceProduct = ClassRegistry::init('ServiceProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceProduct);

		parent::tearDown();
	}

}
