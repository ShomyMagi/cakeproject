<?php
App::uses('TransferLicense', 'Model');

/**
 * TransferLicense Test Case
 */
class TransferLicenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transfer_license'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TransferLicense = ClassRegistry::init('TransferLicense');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TransferLicense);

		parent::tearDown();
	}

}
