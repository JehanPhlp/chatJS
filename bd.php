<?php 

	function createDB(){
        $server = 'localhost';
        $db = 'id20338602_bd_chat';
        $login = 'id20338602_admin';
        $mdp = 'papeete$GPT$666';
        try {
            $linkpdo = new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
            $linkpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $linkpdo;
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

?>