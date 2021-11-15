<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * , COUNT(*) AS nb_etudiant FROM `etudiants`");
$Etudiants = mysqli_fetch_all($Requete, MYSQLI_ASSOC);
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
                <th>Prenom</th>
                <th>Nombres d'étudiants</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Etudiants as $Etudiant){
                echo'<td>'.$Etudiant['nom'].'</td>';
                echo'<td>'.$Etudiant['prenom'].'</td>';
                echo'<td>'.$Etudiant['nb_etudiant'].'</td></tr>';
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>
