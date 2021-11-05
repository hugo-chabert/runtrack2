<?php
if(isset($_POST['username']) || isset($_POST['password']))
    if($_POST['username'] == 'John' && $_POST['password'] == 'Rambo')        
        echo "C'est pas ma guerre";

    else
        echo "Votre pire cauchemar";

?>

<html>
    <form method="post" action="./index.php">
        <label for="username" >Username: </label>
        <input type="text" name="username" id="username"><br/>
        <label for="password" >Password: </label>
        <input type="password" name="password" id="password"><br/>
        <input type="submit" value="Submit">
    </form>
</html>