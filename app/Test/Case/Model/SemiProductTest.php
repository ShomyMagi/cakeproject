<?php
App::uses('SemiProduct', 'Model');

/**
 * SemiProduct Test Case
 */
class SemiProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.semi_product',
		'app.material_status',
		'app.consumable',
		'app.recommended_rating',
		'app.inventory',
		'app.items',
		'app.material',
		'app.service_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SemiProduct = ClassRegistry::init('SemiProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SemiProduct);

		parent::tearDown();
	}

}
