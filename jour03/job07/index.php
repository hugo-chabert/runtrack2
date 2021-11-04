<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$i = 0;
$j = 1;


while(isset($str[$j]) == true){
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
    echo $str[$i];
    $str[$i] = $str[$j];
    $j++;
}
echo $str[$i];
?>