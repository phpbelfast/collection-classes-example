<?php
/**
 * Summary goes here and ends in a full stop plus blank line.
 *
 * Description goes here and goes across
 * Two or more lines
 *
 * @author: tim
 * Date: 18/05/2017 23:16
 * @license:
 */

namespace MusicApp;


class AlbumCollection extends BaseCollection {


	protected $items = array();

	public function __construct(Album   ...$albums) {
		$this->items = $albums;
	}


	public function addItem(Album $album) {
		$this->items[] = $album;
	}


}