<?php
App::uses('MeasurmentUnit', 'Model');

/**
 * MeasurmentUnit Test Case
 */
class MeasurmentUnitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.measurment_unit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeasurmentUnit = ClassRegistry::init('MeasurmentUnit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeasurmentUnit);

		parent::tearDown();
	}

}
