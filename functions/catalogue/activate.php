<?php require '../../db/conn.php' ;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query= "UPDATE catalogue SET status=true WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die('No se encontro la id');
    }
    header("Location: /onlineShop/functions/catalogue/trash.php");
    exit();
}

?>