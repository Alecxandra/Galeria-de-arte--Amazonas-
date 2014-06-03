<?php
App::uses('GalleryInformation', 'Model');

/**
 * GalleryInformation Test Case
 *
 */
class GalleryInformationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gallery_information'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GalleryInformation = ClassRegistry::init('GalleryInformation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GalleryInformation);

		parent::tearDown();
	}

}
