<?php
App::uses('Good', 'Model');

/**
 * Good Test Case
 */
class GoodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.good',
		'app.product_status',
		'app.items'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Good = ClassRegistry::init('Good');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Good);

		parent::tearDown();
	}

}
