<?php
session_start();
$nbvalue = 'CookieLOL';
setcookie($nbvalue, $nbvisites, time() + 3600);

if(isset($_COOKIE['nbvisites'])){
    $_COOKIE['nbvisites']++;
}
else{
    $_COOKIE['nbvisites'] = 0;
}

if(isset($_POST['reset']))
    $_COOKIE['nbvisites'] = 0;

echo($_COOKIE['nbvisites']);

?>
<html>
    <form method="post" action="./index.php">
        <input type="submit" name="reset" value="RESET">
    </form>
</html>