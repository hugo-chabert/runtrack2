<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE `naissance` >= '1998-01-01' AND `naissance` <= '2017-12-31'");
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
                <th>Naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Etudiants as $Etudiant){
                echo'<tr><td>'.$Etudiant['prenom'].'</td>';
                echo'<td>'.$Etudiant['nom'].'</td>';
                echo'<td>'.$Etudiant['naissance'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
