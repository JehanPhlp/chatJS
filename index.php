
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Chat Papeete</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js">
            let champMessage = document.getElementById("champsMessage");
            let auteur = document.getElementById("champPseudo");
        </script>
    </head>
    <body>
        <input type="text" id="champPseudo">
        <?php

            require('query.php');

            $listmessages = getMessages();

            echo '<table>';
            foreach($listmessages as $message){
                echo '<tr>
                        <td>'.$message['auteur'].'</td>
                        <td>'.$message['contenu'].'</td>
                    </tr>';
            }
            echo '</table>';
        ?>
        <form action="">
            <input type="text" id="champMessage">
            <input type="submit" value="Envoyer" onclick="envoyerMessage(champMessage, auteur)">
        </form>
    </body>
</html>
