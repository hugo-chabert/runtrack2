<?php
$i = 1;
$comp = 0;
$k = 1;
while ($i <= 1000){   
    while ($k <= $i){
        if ($i % $k == 0)
        $comp++;
    $k++;
    } 
    if($comp == 2)
        echo $i."<br/>"; 
    $k = 1;
    $comp = 0;
    $i++;
}
?> 