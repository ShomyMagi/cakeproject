<?php
App::uses('ServiceSupplier', 'Model');

/**
 * ServiceSupplier Test Case
 */
class ServiceSupplierTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.service_supplier',
		'app.recommended_rating',
		'app.consumable',
		'app.material_status',
		'app.inventory',
		'app.items',
		'app.material',
		'app.semi_product',
		'app.service_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ServiceSupplier = ClassRegistry::init('ServiceSupplier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServiceSupplier);

		parent::tearDown();
	}

}
