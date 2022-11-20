<?php 
require "../../db/conn.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "UPDATE catalogue SET status = false WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }
    header ("Location: /onlineShop/views/auth/logged.php");
}

?>