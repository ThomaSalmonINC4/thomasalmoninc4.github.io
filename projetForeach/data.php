<?php

    // Mon tableau

    // - Décomposer un épisode
    // sous forme d'un tableau associatif

    $dataEpisode = [
        "numero" => "S02-E01",
        "titre" => "Introduction au PHP",
        "contenu" => "fugit tenetur quaerat"
    ];

    // Mon tableau à 2 dimensions qui
    // va contenir la liste des épisodes

    // La première dimension
    // va être décomposer par un tableau
    // qui va contenir pour 1 épisode donné :
    // une clé qui va contenir l'id de l'épisode => $dataEpisode

    $dataEpisodes = [
        1 => $dataEpisode,
        2 => [
            "numero" => "S02-E02",
            "titre" => "PHP Usine à HTML",
            "contenu" => "Lorem ipsum dolor sit"
        ],
        3 => [
            "numero" => "S02-E03",
            "titre" => "Templating",
            "contenu" => "amet consectetur adipisicing elit."
        ],
        4 => [
            "numero" => "S02-E04",
            "titre" => "Atelier",
            "contenu" => "Minima voluptatibus at architecto"
        ],
        5 => [
            "numero" => "S02-E05",
            "titre" => "Formulaires",
            "contenu" => "ex earum, eos facere"
        ],
        6 => [
            "numero" => "S02-E06",
            "titre" => "Fonctions",
            "contenu" => "placeat nobis iste ea fugiat quo nostrum, velit reprehenderit delectus illo?"
        ]
    ];

?>