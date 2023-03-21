<?php

    require('bd.php');

    function createMessage($contenu, $auteur, $dateheure){
        try {
            $linkpdo = createDB();
            $select = $linkpdo->prepare('INSERT INTO Message(contenu, auteur, date_heure) values(?, ?, ?)');
            $select->execute(array($contenu, $auteur, $dateheure));
        } catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    }

    function get10Messages(){
        try {
            $linkpdo = createDB();
            $select = $linkpdo->prepare('SELECT contenu, auteur, date_heure FROM Message ORDER BY 3 desc LIMIT 10');
            $select->execute();
            $list = $select->fetchAll();
            return $list;
        } catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    }

    function estMessageDoublon($message) {
        try {
            $linkpdo = createDB();
            $select = $linkpdo->prepare('SELECT id_message FROM Message WHERE contenu = ?');
            $select->execute(array($message));
            return !empty($select->fetchAll());
        } catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    }

?>