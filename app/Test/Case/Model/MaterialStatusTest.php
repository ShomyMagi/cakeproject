<?php
App::uses('MaterialStatus', 'Model');

/**
 * MaterialStatus Test Case
 */
class MaterialStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.material_status',
		'app.consumable',
		'app.recommended_rating',
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
		$this->MaterialStatus = ClassRegistry::init('MaterialStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MaterialStatus);

		parent::tearDown();
	}

}
