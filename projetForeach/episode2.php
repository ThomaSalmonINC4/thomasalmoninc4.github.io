<?php 
    $title = "Detail d'un épisode";
    require_once "./inc/header.tpl.php"; 
    require_once "data.php";
    $id = 2;
    $dataEpisode = $dataEpisodes[$id];
    require_once "./inc/episode.tpl.php";
    require_once "./inc/footer.tpl.php" 
?>