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

    $upload_dir = '../../uploads/';
    $image_name = basename($_FILES['image']['name']);
    $target_file = $upload_dir . $image_name;
    $url_database = '';
    $target_file_database = $url_database . $image_name;
    // Validar y mover la imagen
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        die("Error al subir la imagen.");
    }

    // Guardar ruta en la base de datos
    $query = "INSERT INTO catalogue (name, description, price, img, quantity, catalogprice) 
              VALUES ('$name', '$description', $price, '$target_file_database', $quantity, $catalogprice)";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("Location: ../../views/auth/logged.php");
}
?>
<!-- Formulario -->
<div style="padding: auto; margin: auto;" class="card w-75 mt-5 mb-5">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/onlineShop/functions/catalogue/save.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Nombre</span>
                <input type="text" class="form-control" placeholder="Nombre producto" name="name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio</span>
                <input type="tel" class="form-control" placeholder="Valor producto" name="price" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio Catálogo</span>
                <input type="text" name="catalogprice" class="form-control" placeholder="Precio Catálogo" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Cantidad</span>
                <input type="number" class="form-control" placeholder="Solo números" name="quantity" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Descripción</span>
                <textarea class="form-control" name="description" placeholder="Describe tu producto" required></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" accept="image/*" name="image" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="save">Guardar</button>
            </div>
        </form>
    </div>
</div>
