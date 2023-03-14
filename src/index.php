
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Chat Papeete</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <script>
            function getChampMessage() {
                return document.getElementById("champMessage").value;
            }
            function getAuteur() {
                return document.getElementById("champPseudo").value;
            }
        </script>
    </head>
    <body>
        <input type="text" id="champPseudo">
        <?php

            require('../data/query.php');

            $listmessages = get10Messages();

            echo '<table>';
            foreach(array_reverse($listmessages) as $message){
                echo '<tr>
                        <td>'.$message['auteur'].'</td>
                        <td>'.$message['contenu'].'</td>
                        <td>Il y a '. (floor((strtotime(date('Y-m-d H:i:s')) - strtotime($message['date_heure'])) / 60)).' min</td>
                    </tr>';
            }
            echo '</table>';
        ?>
        <form action="">
            <input type="text" id="champMessage">
            <input type="submit" value="Envoyer" onclick="envoyerMessage(getChampMessage(), getAuteur())">
        </form>
    </body>
</html>
