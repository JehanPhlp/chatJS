<?php

    require("bd.php");

    $auteur = $_GET['auteur'];
    $contenu = $_GET['contenu'];
    $dateheure = date('Y-m-d H:i:s');

    createMessage($contenu, $auteur, $dateheure);

    header('Location: afficher.php');
    
?>