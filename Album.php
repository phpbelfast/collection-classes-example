<?php

namespace MusicApp;


class Album {

	private $title;

	private $duration;

	/**
	 * @var SongCollection
	 */
	protected $songs;

	public function __construct( $title = ''  ) {
		$this->title = $title;
	}

	public function setSongs(SongCollection $songCollection) {
		$this->songs = $songCollection;
	}

	public function getSongs() {
		return $this->songs;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getDuration() {
		return $this->songs->getTotalDuration();
	}







}