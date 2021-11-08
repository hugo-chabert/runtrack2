<?php

$str="Ici on a une phrase";

function leetspeak($str){
    $i = 0;
    while(isset($str[$i]) == true){
        if($str[$i] == 'A' || $str[$i] == 'a')
            $str[$i] = '4';
        elseif($str[$i] == 'B' || $str[$i] == 'b')
            $str[$i] = '8';
        elseif($str[$i] == 'E' || $str[$i] == 'e')
            $str[$i] = '3';
        elseif($str[$i] == 'G' || $str[$i] == 'g')
            $str[$i] = '6';
        elseif($str[$i] == 'L' || $str[$i] == 'l')
            $str[$i] = '1';
        elseif($str[$i] == 'S' || $str[$i] == 's')
            $str[$i] = '5';
        elseif($str[$i] == 'T' || $str[$i] == 't')
            $str[$i] = '7';
        $i++;
    }
    return($str);
}

echo(leetspeak($str));

?>