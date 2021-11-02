<?php
$bool = true;
$int = 7;
$str = 'Hugo';
$float = 1.2;

echo '
<!DOCTYPE html>
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
                    <td>
                        type
                    </td>
                    <td>
                        nom
                    </td>
                    <td>
                        valeur
                    </td>
                </tr>
            <thead>
            <tbody>
                <tr>
                    <td>
                        Booléen
                    </td>
                    <td>
                        $bool
                    </td>
                    <td>
                        '.$bool.'    
                    </td>
                </tr>
                <tr>
                    <td>
                        Entier
                    </td>
                    <td>
                        $int    
                    </td>
                    <td>
                        '.$int.'
                    </td>
                </tr>
                <tr>
                    <td>
                        Chaîne de caractères
                    </td>
                    <td>
                        $str
                    </td>
                    <td>
                        '.$str.'
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre à virgule flottante
                    </td>
                    <td>
                        $float
                    </td>
                    <td>
                        '.$float.'
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
';
?>