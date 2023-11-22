<?php
namespace Practicals;
class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    /**
     * Constructor to initialize the Song object.
     */
    public function __construct() {
        $this->title = '';
        $this->artist = '';
        $this->genre = '';
        $this->tempo = 0;
    }

    /**
     * Getter for the title property.
     * @return string The title of the song.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Setter for the title property.
     * @param string $title The title of the song.
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Getter for the artist property.
     * @return string The artist of the song.
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Setter for the artist property.
     * @param string $artist The artist of the song.
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Getter for the genre property.
     * @return string The genre of the song.
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Setter for the genre property.
     * @param string $genre The genre of the song.
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Getter for the tempo property.
     * @return int The tempo of the song.
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Setter for the tempo property.
     * @param int $tempo The tempo of the song.
     */
    public function setTempo($tempo) {
        // Convert integer strings to integers
        $tempo = is_numeric($tempo) ? (int) $tempo : $tempo;
    
        if (!is_numeric($tempo) || floatval($tempo) != intval($tempo)) {
            throw new \InvalidArgumentException('Tempo must be an integer or an integer string.');
        }
    
        $this->tempo = $tempo;
    }
}

?>
