<?php
if (!empty($_FILES)){
    foreach ($_FILES['file'] as $name=>$value){
        echo $name."=".$value."<br>";
    }
}
?>