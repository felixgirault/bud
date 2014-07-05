<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license MIT License (http://opensource.org/licenses/MIT)
 */
namespace Bud;

use Pimple\Container;



/**
 *	Extends the Pimple container with alternative access methods.
 */
class Bud extends Container {

	/**
	 *	@see Container::offsetExists()
	 */
	public function __isset($key) {
		return $this->offsetExists($key);
	}

	/**
	 *	@see Container::offsetGet()
	 */
	public function __get($key) {
		return $this->offsetGet($key);
	}

	/**
	 *	@see Container::offsetSet()
	 */
	public function __set($key, $value) {
		$this->offsetSet($key, $value);
	}

	/**
	 *	@see Container::offsetUnset()
	 */
	public function __unset($key) {
		return $this->offsetUnset($key);
	}

	/**
	 *	@see Container::offsetExists()
	 */
	public function has($key) {
		return $this->offsetExists($key);
	}

	/**
	 *	@see Container::offsetGet()
	 */
	public function get($key) {
		return $this->offsetGet($key);
	}

	/**
	 *	@see Container::offsetSet()
	 */
	public function set($key, $value) {
		$this->offsetSet($key, $value);
	}

	/**
	 *	@see Container::offsetUnset()
	 */
	public function del($key) {
		return $this->offsetUnset($key);
	}
}
