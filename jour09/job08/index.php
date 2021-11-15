<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * , SUM(`capacite`) AS capacite_totale FROM `salles`");
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
                <th>Superficie Totale</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Salles as $Salle){
                echo'<td>'.$Salle['nom'].'</td>';
                echo'<td>'.$Salle['capacite'].'</td>';
                echo'<td>'.$Salle['capacite_totale'].'</td></tr>';
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>
