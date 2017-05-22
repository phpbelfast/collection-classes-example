<?php
/**
 * Summary goes here and ends in a full stop plus blank line.
 *
 * Description goes here and goes across
 * Two or more lines
 *
 * @author: tim
 * Date: 18/05/2017 23:28
 * @license:
 */

namespace MusicApp;


use Traversable;

abstract class BaseCollection implements \IteratorAggregate , \Countable {


	protected $items = array();

	public function getIterator() {
		return new \ArrayIterator($this->items);
	}

	public function count() {
		return count($this->items);
	}


	public function findBy($property, $value) {

		$method = "get" .ucwords($property);

		foreach ( $this->items as $key => $obj ) {
			if (method_exists($obj, $method) ) {
				if($obj->{method}() == $value) {
					return $obj;
				}

			}
		}

	}


}