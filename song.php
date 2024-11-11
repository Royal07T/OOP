<?php 
class song
{
    public string  $name;
    public string $artist;
    public int $number_of_play;

    public function __construct( $name, $artist,$number_of_play)
    {
        $this->name = $name;
        $this->artist = $artist;
        $this->number_of_play = $number_of_play;
    }
}