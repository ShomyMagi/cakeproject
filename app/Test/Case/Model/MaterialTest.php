<?php
App::uses('Material', 'Model');

/**
 * Material Test Case
 */
class MaterialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.material',
		'app.recommended_rating',
		'app.consumable',
		'app.material_status',
		'app.inventory',
		'app.items',
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
		$this->Material = ClassRegistry::init('Material');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Material);

		parent::tearDown();
	}

}
