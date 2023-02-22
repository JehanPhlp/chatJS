<?php 

	function createDB(){
        $server = 'localhost';
        $db = 'chat_papeete';
        $login = 'root';
        $mdp = '';
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