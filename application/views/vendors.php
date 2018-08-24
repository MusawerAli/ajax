<?php
include"login/header.php"; 

foreach($vendors as $vendors){
    echo"<br>";
    echo $vendors['item_company'];
}
?>