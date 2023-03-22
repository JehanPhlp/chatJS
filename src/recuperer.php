<?php
    require_once('../data/query.php');
    $listmessages = get10Messages();
    echo '<table id="listeMessages">';
    foreach(array_reverse($listmessages) as $message){
        echo '<tr>
            <td>'.htmlentities($message['auteur']).'</td>
            <td>'.htmlentities($message['contenu']).'</td>
            <td>'. afficherDate($message['date_heure']).'</td>
            </tr>';
    }
    echo '</table>';

    function afficherDate($dateHeure){
        $time = floor((strtotime(date('Y-m-d H:i:s')) - strtotime($dateHeure)) / 60);
        if ($time > 1440) {
            if (floor($time/1440) == 1) {
                return "Il y a 1 jour";
            } else {
                return "Il y a ". floor($time/1440)." jours";
            }
        } else if ($time > 60) {
            if (floor($time/60) == 1) {
                return "Il y a 1 heure";
            } else {
                return "Il y a ". floor($time / 60) ." heures";
            }
        } else {
            if ($time == 0) {
                return "Maintenant";
            }
            return "Il y a ". $time . " min";
        }
    }
?>