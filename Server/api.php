<?php
    header("Access-Control-Allow-Origin: *");

    $string = file_get_contents('../Database/movies.json');

    header('Content-Type: application/json');

    echo $string;