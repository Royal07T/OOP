<?php 

declare(strict_types =1);
require_once 'song.php';


$song = new song('Kante','Fav ft Davido',2000);
//var_dump($song->name);
print $song->name . PHP_EOL;
print $song->artist .PHP_EOL;
print $song->number_of_play . PHP_EOL;