
<html> 
    <?php
        if(isset($_POST['style']) == false){
        }
        else if($_POST['style'] == 'style1'){
            echo  ' <link href="css/style1.css" rel="stylesheet">';                    
        }
        else if($_POST['style'] == 'style2'){
            echo  '<link href="css/style2.css" rel="stylesheet">';                    
        }
        else if($_POST['style'] == 'style3'){
            echo  '<link href="css/style3.css" rel="stylesheet">';                    
        }
    ?>      
    <form method="post" action="./index.php">
        <select name="style" id="style">
            <option value="">--Choisissez le Style-</option>
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <input type="submit">
    </form>
    <p>
        Changez le style de la page !!
    </p>
</html>

