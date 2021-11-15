<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * , SUM(`superficie`) AS superficie_totale FROM `etage`");
$Etages = mysqli_fetch_all($Requete, MYSQLI_ASSOC);
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
                <th>Numero</th>
                <th>Superficie Totale</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Etages as $Etage){
                echo'<td>'.$Etage['nom'].'</td>';
                echo'<td>'.$Etage['numero'].'</td>';
                echo'<td>'.$Etage['superficie_totale'].'</td></tr>';
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>
