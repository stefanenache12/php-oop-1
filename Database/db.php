<?php
        
        require_once __DIR__ . '/../Models/Movie.php';

        $movies = [];

        $ilPadrino = new Movie
        (
            'Il Padrino',
            ['Drammatico','Giallo'],
            'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg',
            'La vita di Vito Corleone, impegnato nel difficile compito di tenere la famiglia unita e l\'impero mafioso compatto.'
        );
    
        $movies[] = $ilPadrino;
    
        $theIrishman = new Movie
        (
            'The Irishman',
            ['Drammatico','Giallo'],
            'https://pad.mymovies.it/filmclub/2017/05/100/locandina.jpg',
            'La storia di Frank Sheeran, veterano di guerra e camionista, divenuto un sicario al soldo della malavita di Filadelfia e assoldato per uccidere il popolare sindacalista Jimmy Hoffa.'
        );
    
        $movies[] = $theIrishman;
    
        $joker = new Movie
        (
            'Joker',
            ['Drammatico','Giallo'],
            'https://support.mondadoristore.it/in/speciali/fantasticstore/joker/poster.jpg',
            'Arthur Fleck, attore comico fallito ed ignorato dalla società, vaga per le strade di Gotham City iniziando una lenta e progressiva discesa negli abissi della follia, sino a divenire una delle peggiori menti criminali della storia.'
        );
    
        $movies[] = $joker;

        $queiBraviRagazzi = new Movie
        (
            'Quei Bravi Ragazzi',
            ['Drammatico','Giallo'],
            'https://pad.mymovies.it/filmclub/2006/03/273/locandina.jpg',
            'Un americano di origini italo irlandesi fa carriera nella mafia newyorchese degli anni 50, ma la vita da gangster riserva delle sorprese non previste.'
        );

        $movies[] = $queiBraviRagazzi;

        $jsonData = json_encode($movies);
        $jsonFilePath = __DIR__ . '/../Database/movies.json';
        file_put_contents($jsonFilePath, $jsonData);
