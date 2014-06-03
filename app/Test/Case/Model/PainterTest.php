<?php
App::uses('Painter', 'Model');

/**
 * Painter Test Case
 *
 */
class PainterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.painter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Painter = ClassRegistry::init('Painter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Painter);

		parent::tearDown();
	}

}
