<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * FROM `etudiants` WHERE `prenom` LIKE 'T%'");
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
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Etudiants as $Etudiant){
                echo'<tr><td>'.$Etudiant['id'].'</td>';
                echo'<td>'.$Etudiant['nom'].'</td>';
                echo'<td>'.$Etudiant['prenom'].'</td>';
                echo'<td>'.$Etudiant['naissance'].'</td>';
                echo'<td>'.$Etudiant['sexe'].'</td>';
                echo'<td>'.$Etudiant['email'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
