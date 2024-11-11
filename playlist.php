<?php 
    class Playlist
    {
        public $songs = [];

        public function addSong($song)
        {
            $this->songs[] = $song;
        }
    }