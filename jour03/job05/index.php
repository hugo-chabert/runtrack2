<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic= [
    "voyelles" => ['a', 'e', 'i', 'o', 'u', 'y','O'],
    "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'],
];
$i = 0;
$j = 0;
$compteurC = 0;
$compteurV = 0;

while(isset($str[$i]) == true){
    while(isset($dic["consonnes"][$j]) == true){
        if($str[$i] == $dic["consonnes"][$j])
            $compteurC++;
        $j++;
    }
    $j = 0;
    while(isset($dic["voyelles"][$j]) == true){
        if($str[$i] == $dic["voyelles"][$j])
            $compteurV++;
        $j++;
    }
    $i++;
    $j = 0;    
}

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
                        Voyelles
                    </td>
                    <td>
                        Consonnes
                    </td>
                </tr>
            <thead>
            <tbody>
                <tr>
                    <td>
                        '.$compteurV.'
                    </td>
                    <td>
                        '.$compteurC.'
                    </td>
                </tr>                
            </tbody>
        </table>
    </body>
</html>
';

?>