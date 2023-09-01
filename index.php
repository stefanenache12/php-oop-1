<?php

    class Movie {
        public $title;
        public $genre;
        public $imgPoster;
        public $infoMovie;

        function __construct($title,$genre,$imgPoster,$infoMovie)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->imgPoster = $imgPoster;
            $this->infoMovie = $infoMovie;
        }

        public function getInfo(){
            return "Title: " . $this->title . "\n<br>"."\nGenere: " . $this->genre ."\n<br>"."\nInfo: " . $this->infoMovie ."\n<hr>";
        }
    }

    $ilPadrino = new Movie
    (
        'Il Padrino',
        'Drammatico',
        NULL,
        'La vita di Vito Corleone, impegnato nel difficile compito di tenere la famiglia unita e l\'impero mafioso compatto.'
    );

    echo $ilPadrino->getInfo();

    $theIrishman = new Movie
    (
        'The Irishman',
        'Giallo',
        NULL,
        'La storia di Frank Sheeran, veterano di guerra e camionista, divenuto un sicario al soldo della malavita di Filadelfia e assoldato per uccidere il popolare sindacalista Jimmy Hoffa.'
    );

    echo $theIrishman->getInfo();

    $joker = new Movie
    (
        'Joker',
        'Drammatico',
        NULL,
        'Arthur Fleck, attore comico fallito ed ignorato dalla società, vaga per le strade di Gotham City iniziando una lenta e progressiva discesa negli abissi della follia, sino a divenire una delle peggiori menti criminali della storia.'
    );

    echo $joker->getInfo();