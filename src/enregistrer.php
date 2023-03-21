<?php

    require_once("../data/query.php");

    $auteur = $_GET['auteur'];
    $contenu = $_GET['contenu'];
    $dateheure = date('Y-m-d H:i:s');

    if(!estMessageDoublon($contenu)) {
        createMessage($contenu, $auteur, $dateheure);
    }

?>