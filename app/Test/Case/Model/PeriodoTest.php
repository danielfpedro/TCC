<?php
App::uses('Periodo', 'Model');

/**
 * Periodo Test Case
 *
 */
class PeriodoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.periodo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Periodo = ClassRegistry::init('Periodo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Periodo);

		parent::tearDown();
	}

}
