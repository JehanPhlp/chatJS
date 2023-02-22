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
            echo"erreur";
            die('Erreur:'.$e->getMessage());
        }
    }

?>