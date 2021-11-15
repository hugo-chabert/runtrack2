<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * FROM `salles` ORDER BY `capacite` DESC");
$Salles = mysqli_fetch_all($Requete, MYSQLI_ASSOC);
?>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }

            td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacite</th>
                <th>ID etage</th>
                <th>ID</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Salles as $Salle){
                echo'<tr><td>'.$Salle['nom'].'</td>';
                echo'<td>'.$Salle['capacite'].'</td>';
                echo'<td>'.$Salle['id_etage'].'</td>';
                echo'<td>'.$Salle['id'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
