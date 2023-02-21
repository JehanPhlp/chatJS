<?php

    require('bd.php');

    $listmessages = getMessages();

    echo '<table>';
    foreach($listmessages as $message){
        echo '<tr>
                <td>'.$message[0]['auteur'].'</td>
                <td>'.$message[0]['contenu'].'</td>
            </tr>';
    }
    echo '</table>';

?>