<?php
require "../../db/conn.php";


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM catalogue WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_array($result);
        $id = $row["id"];
        $name = $row["name"];
        $quantity= $row["quantity"];
        $description = $row["description"];
        $price = $row["price"];
        $status = $row["status"];
        $catalogprice= $row["catalogprice"];
    }
}

if (isset($_POST["update"])) {
    $idup = $_GET["id"];
    $nameup = $_POST["name"];
    $descriptionup = $_POST["description"];
    $quantityup = $_POST["quantity"];
    $priceup = $_POST["price"];
    $catalogpriceup = $_POST['catalogprice'];
    $n_img = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $queryup = "UPDATE catalogue SET name = '$nameup', description= '$descriptionup', price= '$priceup', img= '$n_img', quantity='$quantityup', catalogprice= '$catalogpriceup' WHERE id= $id";
    mysqli_query($conn, $queryup);
    echo '<script>alert("hola");</script>';
        header("Location: /onlineShop/views/auth/logged.php");

}
?>
<?php include '../../shared/header.php' ?>
<?php include '../../shared/navloggedb.php' ?>

<div style="padding: auto; margin: auto;" class="card w-75 mt-5 mb-5">
    <div class="card-header">
        <img style="border-radius: 50%; width: 125px; height: 125px;"
            src="data:image/jpg; base64, <?php echo base64_encode($row['img']) ?>" alt="">
    </div>
    <div class="card-body">
        <form action="/onlineShop/functions/catalogue/edit.php?id=<?php echo $_GET["id"] ?>" method="post"
            enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Nombre</span>
                <input value="<?php echo $row["name"] ?>" type="text" class="form-control"
                    placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"
                    name="name" required >
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio</span>
                <input value="<?php echo $row["price"] ?>" type="text" class="form-control"
                    placeholder="precio" aria-label="precio" aria-describedby="basic-addon2"
                    name="price" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">PrecioCatalogo</span>
                <input type="text" value="<?php echo $row['catalogprice']?>" class="form-control"
                placeholder="Precio Catalogo" aria-level="Precio Catalogo" aria-describedby="basic-addon2"
                name="catalogprice" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Cantidad</span>
                <input value="<?php echo $row['quantity'] ?>" type="number" class="form-control"
                name="quantity" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Descripcion</span>
                <textarea class="form-control" name="description"
                    aria-label="With textarea" required><?php echo $row["description"] ?></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" required name="image" accept="image/*">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="update">Actualizar</button>
            </div>
        </form>
    </div>
    <div class="card-footer">

    </div>
</div>
<?php include '../../shared/footer.php' ?>