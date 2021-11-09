<?php
session_start();

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
}
else{
    $_SESSION['nbvisites'] = 0;
}

if(isset($_POST['reset']))
    $_SESSION['nbvisites'] = 0;

echo($_SESSION['nbvisites']);

?>
<html>
    <form method="post" action="./index.php">
        <input type="submit" name="reset" value="RESET">
    </form>
</html>