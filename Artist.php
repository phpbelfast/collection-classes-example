<?php
namespace MusicApp;

class Artist {

	private $name;

	/**
	 * @var AlbumCollection
	 */
	private $albums ;

	public function __construct( $name='' ) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getAlbums() {
		return $this->albums;
	}

	/**
	 * @param mixed $albums
	 */
	public function setAlbums( $albums ) {
		$this->albums = $albums;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return Artist
	 */
	public function setName( $name ) {
		$this->name = $name;

		return $this;
	}



}
