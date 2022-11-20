<?php
require '../../db/conn.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: /onlineShop');
    session_destroy();
    die();
}
?>
<?php include '../../shared/header.php'; ?>
<?php include '../../shared/navlogged.php'; ?>



<div class="container text-center">
    <div class="row align-items-center m-2">
        <div class="col">
            <form action="/onlineShop/functions/catalogue/search.php" method="get">
                <div class="col-sm-8">
                    <div class="input-group">
                        <button type="submit" class="input-group-text" name="search">
                            <svg fill="orangered" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 513.749 513.749" style="enable-background:new 0 0 513.749 513.749;"
                                xml:space="preserve" width="22" height="22">
                                <g>
                                    <path
                                        d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15   S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0   c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160   s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z" />
                                </g>
                            </svg>
                        </button>
                        <input type="text" name="search" class="form-control" id="specificSizeInputGroupUsername"
                            placeholder="Buscar">
                    </div>
            </form>
        </div>
    </div>
    <div class="col">
        <form action="/onlineShop/functions/catalogue/save.php" method="post">
            <button name="new-save" class="btn btn-ligth btn-sm" type="submit">
                <svg fill="orangered" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve" width="20" height="20">
                    <g>
                        <path
                            d="M480,224H288V32c0-17.673-14.327-32-32-32s-32,14.327-32,32v192H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h192v192   c0,17.673,14.327,32,32,32s32-14.327,32-32V288h192c17.673,0,32-14.327,32-32S497.673,224,480,224z" />
                    </g>
                </svg>
            </button>
        </form>
    </div>
</div>


</div>
<div class="container text-center pt-1">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/onlineShop/functions/catalogue/trash.php"><span style="color: red;">Eliminados</span></a></li>
        </ol>
    </nav>
</div>
<div class="p-2 pt-1">
    <div class="table-responsive">
        <table class="table table-hover table-secondary table-sm">
            <thead class="table table-warning">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>PrecioCatalogo</th>
                    <th>Cantidad</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = 'SELECT * FROM catalogue WHERE status=true';
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                <tr style="font-size: 14px;">
                    <td>
                        <?php echo $row["name"] ?>
                    </td>
                    <td>
                        <?php echo $row["description"] ?>
                    </td>
                    <td>
                        <?php echo $row['price'] ?>
                    </td>
                    <td>
                        <?php echo $row['catalogprice']?>
                    </td>
                    <td>
                        <?php echo $row['quantity']?>
                    </td>
                    <td>
                        <a href="/onlineShop/functions/catalogue/edit.php?id=<?php echo $row["id"] ?>">
                            <svg fill="green" style="margin-right: 8px;" xmlns="http://www.w3.org/2000/svg" id="Outline"
                                viewBox="0 0 24 24" width="20" height="20">
                                <path
                                    d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                                <path
                                    d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                            </svg>
                        </a>
                        </td>
                        <td>
                        <a href="/onlineShop/functions/catalogue/delete.php?id=<?php echo $row["id"] ?>">
                            <svg fill="red" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                width="20" height="20">
                                <path
                                    d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include '../../shared/footer.php'; ?>