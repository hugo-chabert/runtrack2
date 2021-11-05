<html>
    <form method="get" action="./index.php">
        <label for="firstN" >Prenom: </label>
        <input type="text" name="firstN" id="firstN"><br/>
        <label for="lastN" >Nom: </label>
        <input type="text" name="lastN" id="lastN"><br/>
        <input type="submit">
    </form>

    <table>
        <style>
            table{
                    border-collapse: collapse;
                }

                td{
                    border: 1px solid black;
                }
        </style>
        <thead>
            <tr>
                <td>
                    Argument
                </td>
                <td>
                    Valeur
                </td>
            </tr>
        <thead>
        <tbody>
            <tr>
                <td>
                    <?php foreach($_GET as $key => $value){
                        echo $key.'<br/>';
                    } ?>
                </td>
                <td>
                    <?php foreach($_GET as $key => $value){
                        echo $value.'<br/>';
                    } ?>
                </td>
            </tr>
        </tbody>
    </table>
</html>