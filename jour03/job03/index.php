<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";
$i = 0;
$j = 0;

while(isset($str[$i]) == true){
    while(isset($voyelles[$j]) == true){
    if($str[$i] == $voyelles[$j])
        echo $str[$i];
        $j++;
    }
    $i++;
    $j = 0;
}

?>