<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */
namespace Bud;

use PHPUnit_Framework_TestCase as TestCase;



/**
 *
 */
class BudTest extends TestCase {

	/**
	 *
	 */
	public $value = 'value';

	/**
	 *
	 */
	public $Bud = null;

	/**
	 *
	 */
	public function setUp() {
		$this->Bud = new Bud();
	}

	/**
	 *
	 */
	public function testMagicMethods( ) {
		$this->assertFalse(isset($this->Bud->key));

		$this->Bud->key = $this->value;
		$this->assertTrue(isset($this->Bud->key));
		$this->assertEquals($this->value, $this->Bud->key);

		unset($this->Bud->key);
		$this->assertFalse(isset($this->Bud->key));
	}

	/**
	 *
	 */
	public function testRegularMethods( ) {
		$this->assertFalse($this->Bud->has('key'));

		$this->Bud->set( 'key', $this->value );
		$this->assertTrue($this->Bud->has('key'));
		$this->assertEquals($this->value, $this->Bud->get( 'key' ));

		$this->Bud->del( 'key' );
		$this->assertFalse($this->Bud->has('key'));
	}
}
