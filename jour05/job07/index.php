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

if(isset($_POST['str'])){
    $str = $_POST['str'];
    $str = $str.' ';
    gras($str);
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

?>