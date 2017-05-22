<?php
/**
 * Summary goes here and ends in a full stop plus blank line.
 *
 * Description goes here and goes across
 * Two or more lines
 *
 * @author: tim
 * Date: 18/05/2017 23:27
 * @license:
 */

namespace MusicApp;


class SongCollection extends BaseCollection {

	protected $items;

	/**
	 * @var \DateTime
	 */
	private $totalDuration;


	public function __construct(Song ...$songs) {
		$this->items = $songs;
	}


	public function addItem(Song $song) {
		$this->items[] = $song;
	}


	/**
	 * calculate duration from individual song durations
	 */
	public function setDuration()
	{

		$this->totalDuration = new \DateTime('@0');

		foreach ($this->items as $song) {
			$seconds = $this->timeToSeconds($song->getDuration());;
			$this->totalDuration->add( date_interval_create_from_date_string($seconds.'seconds'));
		}

	}

	/**
	 * @return \DateTime
	 */
	public function getTotalDuration() {
		if (empty($this->totalDuration)) {
			$this->setDuration();
		}
		return $this->totalDuration;
	}

	private function timeToSeconds($his)
	{
		$time = explode(':',$his);
		$seconds = $time[ count($time) - 1 ];
		$minutes = $time[ count($time) - 2 ];

		return $seconds + ($minutes * 60);

	}


}