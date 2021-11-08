<html>
    <form method="post" action="./index.php">
        <label for="str" >Str: </label>
        <input type="text" name="str" id="str"><br/>
        <select name="fonction" id="fonction">
            <option value="">--Choisissez la fonction--</option>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select><br/>
        <input type="submit">
    </form>
</html>
<?php

if(isset($_POST["str"]) == true) {
    foreach ($_POST as $key => $value) {
        if ($value == "gras") {
            $str= $_POST["str"].' ';
            gras($str);
        }
        else
            false;
    }
}



function gras($str){
    $i = 0;
    $maj = "AZERTYUIOPQSDFGHJKLMWXCVBN ";
    $min = "azertyuiopqsdfghjklmwxcvbn ";
    $space = " ";
    while(isset($str[$i]) == true){  
        $j = 0;
        while(isset($maj[$j]) == true){
            if($str[$i] == $maj[$j]){
                while($str[$i] != $space){
                    echo('<b>'.$str[$i].'</b>');
                    $i++;
                }
                echo($space);
            }
            else if($str[$i] == $min[$j]){
                while($str[$i] != $space){
                    echo($str[$i]);
                    $i++;
                }
            }          
            $j++;
        }   
        $i++;    
    }
    return ($str);
}


$decalage = 2;


if(isset($_POST["str"]) == true) {
    foreach ($_POST as $key => $value) {
        if ($value == "cesar") {
            $str= $_POST["str"];
            cesar($str,$decalage);
        }
        else
            false;
    }
}

function cesar($str, $decalage){
    $minus = "abcdefghijklmnopqrstuvwxyz";
    $majus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $boucle1 = $decalage;
    $boucle2 = $decalage;
    while($boucle1 > 0){
        $change = $minus;
        $i = 0;
        $j = 1;
        $minus = '';
        while(isset($change[$j]) == true){
            $temp = $change[$i];
            $change[$i] = $change[$j];
            $change[$j] = $temp;
            $minus .= $change[$i];
            $change[$i] = $change[$j];
            $j++;
        }
        $minus .= $change[$i];
        $boucle1--;
    }
    while($boucle2 > 0){
        $change = $majus;
        $i = 0;
        $j = 1;
        $majus = '';
        while(isset($change[$j]) == true){
            $temp = $change[$i];
            $change[$i] = $change[$j];
            $change[$j] = $temp;
            $majus .= $change[$i];
            $change[$i] = $change[$j];
            $j++;
        }
        $majus .= $change[$i];
        $boucle2--;
    }
    
    $alphabetMIN = "abcdefghijklmnopqrstuvwxyz";
    $alphabetMAJ = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $space = " ";
    $i = 0;    
    while(isset($str[$i]) == true){
        $j = 0;
        $k = 0;
        
        if($str[$i] == $space)
                echo($space);

        while(isset($alphabetMIN[$j]) == true){
            if($str[$i] == $alphabetMIN[$j])
                echo($minus[$j]);
            $j++;
        }
        
        while(isset($alphabetMAJ[$k]) == true){
            if($str[$i] == $alphabetMAJ[$k])
                echo($majus[$k]);
            $k++;
        }
        $i++;
    }
    return($str);  
}

if(isset($_POST["str"]) == true) {
    foreach ($_POST as $key => $value) {
        if ($value == "plateforme") {
            $str= $_POST["str"];
            plateforme($str);
        }
        else
            false;
    }
}

function plateforme($str){
    $i = 0;
    if($str[$i-1] == 'e' && $str[$i-2] == 'm')
        $str .= '_';
    echo($str);
    return($str);
}

?>