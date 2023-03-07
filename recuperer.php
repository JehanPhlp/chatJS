<?php

    require('query.php');

    $derniersMessages = get10Messages();

    echo '<table>';
            foreach($derniersMessages as $message){
                echo '<tr>
                        <td>'.$message['auteur'].'</td>
                        <td>'.$message['contenu'].'</td>
                    </tr>';
            }
            echo '</table>';

?>