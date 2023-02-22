<?php

    require('bd.php');

    function getMessages(){
        try {
            $linkpdo = createDB();
            $select = $linkpdo->prepare('SELECT contenu, auteur FROM Message');
            $select->execute();
            $list = $select->fetchAll();
            return $list;
        } catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    }

    function createMessage($contenu, $auteur, $dateheure){
        try {
            $linkpdo = createDB();
            $select = $linkpdo->prepare('INSERT INTO Message(contenu, auteur, date_heure values(?, ?, ?)');
            $select->execute(array($contenu, $auteur, $dateheure));
        } catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    }

?>