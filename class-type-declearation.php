<?php 

require_once 'playlist.php';
require_once 'song.php';

$playlist = new playlist();

$song1 = new song('Looku Looku','Tems',100);
$song2 = new song('Baby Ridim','Fav',1500);

$playlist->addSong($song1);
$playlist->addSong($song2);



foreach($playlist->songs as $song){
    print $song->name  .'<br>'. PHP_EOL;
}