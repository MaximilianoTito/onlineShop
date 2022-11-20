<?php
require '../../db/conn.php';
if(isset($_POST["save"])){
    $name= $_POST["name"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $query = "INSERT INTO users (name, lastname, mobile_phone) VALUES ('$name', '$lastname', $phone)";
    mysqli_query($conn, $query);
    header("Location:/onlineShop/index.php");
}

?>