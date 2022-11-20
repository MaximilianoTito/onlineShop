<?php include 'shared/header.php' ?>
<?php include 'shared/nav.php' ?>
<?php include 'db/conn.php';

$query = "SELECT * FROM catalogue WHERE status=true";
$result = mysqli_query($conn, $query);
?>
<h5 style="color: #853400;" class="text-center pt-3">☛Productos disponibles☚</h5>
<?php echo $alerts?>
<?php while ($row = mysqli_fetch_array($result)) { ?>
<div class="m-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img class="img rounded-start rounded-end"
                    src="data:image/jpg;base64, <?php echo base64_encode($row['img']) ?>" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-header"><span style="color: orangered; font-size: 19px; font-weight: bolder;">
                    <?php echo $row['name'] ?>
                </span></div>
                <div class="card-body">
                    
                    <p style="font-size: 17px; color: #5f282c; " class="card-text">
                        <?php echo $row['description'] ?>
                    </p>
                    <p style="font-size: 13px; color: green;">Disponibilidad:
                        <?php echo $row['quantity'] ?>
                    </p>
                    <p style="font-size: 17px;" class="card-text"><small class="text-muted"> <strong>Precio:</strong>
                            <?php echo $row['price'] ?>
                        </small>
                    </p>
                    <div class="d-grid gap-2">
                        <a class="btn btn-success"
                            href="https://wa.me/593992865788?text=Me%20interesa%20saber%20mas%20del%20producto%20en%20oferta%20*_<?php echo $row['name'] ?>_*%20con%20el%20costo%20de%20*_<?php echo $row['price'] ?>_*"
                            ;
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            <svg fill="white" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                            width="20" height="20">
                            <circle cx="7" cy="22" r="2" />
                            <circle cx="17" cy="22" r="2" />
                            <path
                                    d="M23.685,1.336a1,1,0,0,0-1.414,0L17.112,6.5,15.561,4.881a1,1,0,0,0-1.442,1.386l1.614,1.679a1.872,1.872,0,0,0,1.345.6h.033a1.873,1.873,0,0,0,1.335-.553L23.685,2.75A1,1,0,0,0,23.685,1.336Z" />
                                    <path
                                    d="M21.9,9.016a1,1,0,0,0-1.162.807l-.128.709A3,3,0,0,1,17.657,13H5.418l-.94-8h51a1,1,0,0,0,0-2H4.242L4.2,2.648A3,3,0,0,0,1.222,0h5A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19h59a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.829-2h57.657a5,5,0,0,0,4.921-4.113l.128-.71A1,1,0,0,0,21.9,9.016Z" />
                                </svg>
                            </a>
                        </div>
                </div>
                <div class="card-footer">
                    <p class="text-muted text-center" style="font-size: 12px;">
                        Producto en oferta aprovechalo ya!!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php include 'shared/footer.php' ?>