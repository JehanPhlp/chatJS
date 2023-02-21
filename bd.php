<?php 

	function createDB(){
        $server = '127.0.0.1';
        $db = 'id20338602_bd_chat';
        $login = 'id20338602_admin';
        $mdp = '!N#Gh6}*hV0q\bIa';
        try {
            $linkpdo = new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
            $linkpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $linkpdo;
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

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