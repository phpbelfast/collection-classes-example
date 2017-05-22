<?php

spl_autoload_register(function ($class) {
	$classpath = str_replace("\\", "/", $class);
	$classpath = str_replace("MusicApp",".", $classpath);
	include   $classpath . ".php" ;

});