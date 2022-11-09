<?php


$USER = 'root';
$HOST = 'localhost';
$PASSWORD = '';
$DATABASE = 'proyam';
$conn = mysqli_connect($USER, $HOST, $PASSWORD, $DATABASE);
if(!$conn){
    die('connection failed'.mysqli_connect_errno());
}echo 'Connected successfully';
mysqli_close($conn);

?>
