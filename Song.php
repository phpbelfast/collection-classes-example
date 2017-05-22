<?php
/**
 * Summary goes here and ends in a full stop plus blank line.
 *
 * Description goes here and goes across
 * Two or more lines
 *
 * @author: tim
 * Date: 18/05/2017 23:35
 * @license:
 */

namespace MusicApp;


class Song {


	private $title;

	/**
	 * @var string
	 */
	private $duration;


	public function __construct($title, $duration='') {

		$this->title = $title;
		$this->duration = $duration;
	}

	/**
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param mixed $title
	 *
	 * @return Song
	 */
	public function setTitle( $title ) {
		$this->title = $title;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * @param string $duration
	 *
	 * @return Song
	 */
	public function setDuration( $duration ) {
		$this->duration = $duration;

		return $this;
	}






}
