<?php
include '../../shared/header.php';
include '../../shared/navloggedb.php';
include '../../db/conn.php';

if (isset($_POST["save"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quantity = $_POST['quantity'];
    $description = $_POST["description"];
    $catalogprice = $_POST['catalogprice'];
    $n_img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $query = "INSERT INTO catalogue (name,description,price, img, quantity, catalogprice) VALUES ('$name', '$description',$price, '$n_img', '$quantity', '$catalogprice');";
    mysqli_query($conn, $query);
    header("Location: ../../views/auth/logged.php");
}

if (isset($_POST["new-save"])) {
?>
<div style="padding: auto; margin: auto;" class="card w-75 mt-5 mb-5">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/onlineShop/functions/catalogue/save.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Nombre</span>
                <input type="text" class="form-control" placeholder="Nombre producto" aria-label="Nombre producto"
                    aria-describedby="basic-addon2" name="name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio</span>
                <input type="tel" class="form-control" placeholder="Valor producto" aria-label="Valor producto"
                    aria-describedby="basic-addon2" name="price" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio Catalogo</span>
                <input type="text" name="catalogprice" class="form-control" placeholder="Precios Catalogo"
                    aria-label="Precios Catalogo" aria-describedby="basic-addon2" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Cantidad</span>
                <input type="number" class="form-control" placeholder="Solo numeros" aria-label="Solo numeros"
                    aria-describedby="basic-addon2" name="quantity" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Descripcion</span>
                <textarea class="form-control" name="description" placeholder="Desribe tu producto"
                    aria-label="With textarea" required ></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" required accept="image/*" name="image">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="save">Guardar</button>
            </div>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
<?php

}
include '../../shared/footer.php';
?>