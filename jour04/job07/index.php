<html>
    <form method="post" action="./index.php">
        <label for="largeur" >Largeur: </label>
        <input type="text" name="largeur" id="largeur"><br/>
        <label for="hauteur" >Hauteur: </label>
        <input type="text" name="hauteur" id="hauteur"><br/>
        <input type="submit">
    </form>
</html>
<?php

if(isset($_POST['largeur'])){
    $space = $_POST['largeur'];
    $largeur = $_POST['largeur']/2;
}

$largeurMID = 0;

if(isset($_POST['largeur'])){

    while($space > 0){
        echo '&nbsp';
        $space--; 
    }
    echo "/\<br/>";
    $space2 = $_POST['largeur'];
    
    while($largeur > 0){
        $space = $space2 - 2;
        $space2 = $space;
        while($space > 0){
            echo '&nbsp';
            $space--; 
        }
        echo "/_";
        $temp = $largeurMID;

        while($largeurMID > 0){
            echo "_";
            $largeurMID--;
        }      
            
        echo "_\<br/>";
        $largeur--;
        $largeurMID = $temp + 2;
    }
        
}

if(isset($_POST['largeur'])){
    $space = $_POST['largeur'] *2;
    $largeurMID = $_POST['largeur'];
}

if(isset($_POST['hauteur'])){
    $hauteur = $_POST['hauteur'];
}

if(isset($_POST['hauteur'])){
    while($hauteur > 1){
        echo '|';
        $space2 = $space;
        while($space2 > 0){
            echo '&nbsp';
            $space2--;
        }
        echo '|<br/>';
        $hauteur--;
    }   
    echo '|';
    while($largeurMID > 0){
        echo "_";
        $largeurMID--;
    } 
    echo '|';
}





?>

