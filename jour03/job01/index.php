<?php
$table=["200","204","173","98","171","404","459"];

foreach($table as $val){
    if($val % 2 !=0)
        echo $val." est impair<br/>";
    else {
        echo $val." est pair<br/>";
    }
}
?>