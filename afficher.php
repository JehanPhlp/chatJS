
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Chat Papeete</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
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
    </body>
</html>
