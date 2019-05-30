<?php
App::uses('Consumable', 'Model');

/**
 * Consumable Test Case
 */
class ConsumableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consumable',
		'app.recommended_rating',
		'app.material_status',
		'app.items'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consumable = ClassRegistry::init('Consumable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consumable);

		parent::tearDown();
	}

}
