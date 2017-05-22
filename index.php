<?php


namespace MusicApp;

use MusicApp\Artist;

require_once "bootstrap.php";

class Artistpage {


	public function __construct(  $artist ) {

		echo "<h1>" . $artist->getName() . "</h1>";
		$this->listSongs($artist);

	}

	public function listSongs(Artist $artist) {

		$albumCollection = $artist->getAlbums();

		foreach ( $albumCollection as $album ) {

			echo '<h2>' . $album->getTitle().'</h2>';
			echo '<table>';
			foreach ( $album->getSongs() as $song ) {
				echo '<tr><td>'  .  $song->getTitle() .  '</td><td>'.$song->getDuration().'</td></tr>' ;
			}
			echo '</table>';
			echo '<br />Album Duration : ' . $album->getDuration()->format("H:i:s");
			echo '<br /><hr />';
		}

	}

}


//Artist - Prince
$prince = new Artist('Prince');

// Albums
$purpleRain = new Album('Purple Rain');
$nineteen   = new Album('1999');

// SONGS
// -------------------------------------------------------------
// Songs from Purple Rain
$songs[] = new Song(  "Let's Go Crazy",  "04:39") ;
$songs[] = new Song(  "Take Me with U",  "03:54") ;
$songs[] = new Song(  "The Beautiful Ones",  "05:13") ;
$songs[] = new Song(  "Computer Blue",  "03:59") ;
$songs[] = new Song( "Darling Nikki",  "04:14") ;
$songs[] = new Song(  "When Doves Cry", 	"05:54" ) ;
$songs[] = new Song( "I Would Die 4 U", "02:49" ) ;
$songs[] = new Song(  "Baby I'm a Star",  "04:24" ) ;
$songs[] = new Song(  "Purple Rain",  "08:41" ) ;
// Song Collection
$purpleRainSongs = new SongCollection(...$songs);
// Album is amde up of the collection
$purpleRain->setSongs($purpleRainSongs);


$tracks[] = new Song(  "1999",  "06:15") ;
$tracks[] = new Song(  "Little Red Corvette",  "05:03") ;
$tracks[] = new Song(  "Delirious",  "04:00") ;
$tracks[] = new Song(  "Let's Pretend We're Married",  "07:21") ;
$tracks[] = new Song( "D.M.S.R",  "08:17") ;
$tracks[] = new Song(  "Automatic", 	"09:28" ) ;
$tracks[] = new Song( "Something in the Water (Does Not Compute)", "04:02" ) ;
$tracks[] = new Song(  "Free",  "05:08" ) ;
$tracks[] = new Song(  "Lady Cab Driver",  "08:19" ) ;
$tracks[] = new Song(  "All the Critics Love U in New York",  "05:59" ) ;
$tracks[] = new Song(  "International Lover",  "06:37" ) ;

// Add $tracks to 1999 SOng Collection  - note tsh use of the ... Variable Length Token
$nineteenSongs = new SongCollection(...$tracks);
$nineteen->setSongs($nineteenSongs);


$albums = [$purpleRain, $nineteen];
$princeAlbums = new AlbumCollection(...$albums);
$prince->setAlbums($princeAlbums);

new Artistpage($prince);
