<?php
    class Movie {
        public $title;
        public array $genre;
        public $imgPoster;
        public $infoMovie;

        function __construct($title,$genre,$imgPoster,$infoMovie)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->imgPoster = $imgPoster;
            $this->infoMovie = $infoMovie;
        }

        public function __toString() {
            return "Title: " . $this->title . "\n" . "Genre: " . implode(' / ', $this->genre) . "\n" . "Info: " . $this->infoMovie . "\n";
        }
    }
