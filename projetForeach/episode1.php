<?php 
    $title = "Detail d'un épisode";
    require_once "./inc/header.tpl.php"; 
?>

<?php
    /*
        on require le header et le footer (OK), et on copie colle le code d'un des épisodes, et on remplacera toutes les valeurs titre, contenu etc par la variable qui récupère lesdonnées du tableau
    */

    // j'accèsde aux datas
    require_once "data.php";

    $id = 1;
    $dataEpisode = $dataEpisodes[$id];

    require_once "./inc/episode.tpl.php";
?>

<?php require_once "./inc/footer.tpl.php" ?>