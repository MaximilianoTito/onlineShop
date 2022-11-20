<?php

session_start();
if(isset($_POST['logout'])){
    header('location: /onlineShop');
    session_destroy();
}
?>