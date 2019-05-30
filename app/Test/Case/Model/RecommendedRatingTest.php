<?php
App::uses('RecommendedRating', 'Model');

/**
 * RecommendedRating Test Case
 */
class RecommendedRatingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recommended_rating',
		'app.consumable',
		'app.material_status',
		'app.items',
		'app.inventory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecommendedRating = ClassRegistry::init('RecommendedRating');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecommendedRating);

		parent::tearDown();
	}

}
