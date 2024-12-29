<?php
require "../../db/conn.php";

// Obtener los datos del producto a editar
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM catalogue WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_array($result);
        $id = $row["id"];
        $name = $row["name"];
        $quantity = $row["quantity"];
        $description = $row["description"];
        $price = $row["price"];
        $status = $row["status"];
        $catalogprice = $row["catalogprice"];
        $img = $row["img"]; // Guardar la imagen actual
    }
}

// Actualizar el producto
if (isset($_POST["update"])) {
    $idup = $_GET["id"];
    $nameup = $_POST["name"];
    $descriptionup = $_POST["description"];
    $quantityup = $_POST["quantity"];
    $priceup = $_POST["price"];
    $catalogpriceup = $_POST['catalogprice'];

    // Manejo de imagen
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageExt = pathinfo($imageName, PATHINFO_EXTENSION);
        $newImageName = uniqid('img_', true) . '.' . $imageExt;
        $imagePath = "../../uploads/" . $newImageName;

        // Mover la imagen a la carpeta de uploads
        move_uploaded_file($imageTmp, $imagePath);

        // Actualizar la imagen en la base de datos
        $queryup = "UPDATE catalogue SET name = '$nameup', description = '$descriptionup', price = '$priceup', img = '$newImageName', quantity = '$quantityup', catalogprice = '$catalogpriceup' WHERE id = $idup";
    } else {
        // Si no se sube una nueva imagen, mantén la imagen actual
        $queryup = "UPDATE catalogue SET name = '$nameup', description = '$descriptionup', price = '$priceup', img = '$img', quantity = '$quantityup', catalogprice = '$catalogpriceup' WHERE id = $idup";
    }

    // Ejecutar la consulta de actualización
    mysqli_query($conn, $queryup);

    // Redirigir después de la actualización
    header("Location: /onlineShop/views/auth/logged.php");
    exit;
}
?>
<?php include '../../shared/header.php'; ?>
<?php include '../../shared/navloggedb.php'; ?>

<div style="padding: auto; margin: auto;" class="card w-75 mt-5 mb-5">
    <div class="card-header">
        <img style="border-radius: 50%; width: 125px; height: 125px;" src="/onlineShop/uploads/<?php echo $img; ?>" alt="">
    </div>
    <div class="card-body">
        <form action="/onlineShop/functions/catalogue/edit.php?id=<?php echo $_GET["id"]; ?>" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Nombre</span>
                <input value="<?php echo $name; ?>" type="text" class="form-control" placeholder="Nombre del producto" aria-label="Recipient's username" aria-describedby="basic-addon2" name="name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio</span>
                <input value="<?php echo $price; ?>" type="text" class="form-control" placeholder="Precio" aria-label="Precio" aria-describedby="basic-addon2" name="price" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Precio Catalogo</span>
                <input type="text" value="<?php echo $catalogprice; ?>" class="form-control" placeholder="Precio Catalogo" aria-level="Precio Catalogo" aria-describedby="basic-addon2" name="catalogprice" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Cantidad</span>
                <input value="<?php echo $quantity; ?>" type="number" class="form-control" name="quantity" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Descripción</span>
                <textarea class="form-control" name="description" aria-label="With textarea" required><?php echo $description; ?></textarea>
            </div>
            <div class="input-group mb-3">
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="update">Actualizar</button>
            </div>
        </form>
    </div>
</div>

<?php include '../../shared/footer.php'; ?>
