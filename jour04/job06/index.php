<?php

if(isset($_GET['nombre']))
    if($_GET['nombre'] % 2 == 0)        
        echo "Nombre pair";

    else
        echo "Nombre impair";

?>
<html>
    <form method="get" action="./index.php">
        <label for="nombre" >Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br/>
        <input type="submit">
    </form>
</html>
