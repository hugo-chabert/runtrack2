<?php
$i = 0;

foreach($_GET as $value){
    $i++;
}
echo $i;

?>

<form method="get" action="./index.php">
    <label for="firstN" >Prenom: </label>
    <input type="text" name="firstN" id="firstN"><br/>
    <label for="lastN" >Nom: </label>
    <input type="text" name="lastN" id="lastN"><br/>
    <input type="submit">
</form>