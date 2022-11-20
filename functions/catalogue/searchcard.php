<?php
require '../../db/conn.php';
if (isset($_GET["search"])) {
  $search = $_GET['search'];
  $query = "SELECT * FROM catalogue WHERE name LIKE '%$search%'";
  $result = mysqli_query($conn, $query);
?>
<?php include '../../shared/header.php' ?>
<?php include '../../shared/nav.php' ?>
<h5 style="color: #853400;" class="text-center pt-2 pb-2">Realiza tus pedidos</h5>

<div class="container text-center">
  <div class="row align-items-center m-2">
    <div class="col">
      <form action="/onlineShop/functions/catalogue/searchcard.php" method="get">
        <div class="">
          <div class="input-group">
            <button type="submit" class="input-group-text" name="search">
              <svg fill="orangered" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 513.749 513.749"
                style="enable-background:new 0 0 513.749 513.749;" xml:space="preserve" width="22" height="22">
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
</div>
</div>

<div class="container text-center pt-1">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration: none; text-align: right;" href="/onlineShop/views/catalogue.php">Mostrar Todos</a></li>
        </ol>
    </nav>
</div>

<div class="p-3">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while ($row = mysqli_fetch_array($result)) { ?>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end" src="data:image/jpg;base64,<?php echo base64_encode($row['img']) ?>"
          alt="...">
        <div class="card-body">
          <h5 class="card-title"><span style="color: orangered; font-size: 20px; font-weight: bolder;">
              <?php echo $row["name"] ?>
            </span></h5>
          <p class="card-text">
            <?php echo $row['description'] ?>
          </p>
          <p><strong style="color:red">Precio Catalogo:</strong>
            <?php echo $row['catalogprice'] ?><span style="font-size: 14px;" class="text-muted"> incluye IVA</span>
          </p>
        </div>
        <a target="_blank" href="https://wa.me/593992865788?text=Me%20interesa%20saber%20mas%20del%20producto%20*_<?php echo $row['name']?>_*%20con%20el%20costo%20de%20*_<?php echo $row['price']?>_*" class="btn btn-success"
          style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
          <svg fill="white" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20">
            <circle cx="7" cy="22" r="2" />
            <circle cx="17" cy="22" r="2" />
            <path
              d="M23.685,1.336a1,1,0,0,0-1.414,0L17.112,6.5,15.561,4.881a1,1,0,0,0-1.442,1.386l1.614,1.679a1.872,1.872,0,0,0,1.345.6h.033a1.873,1.873,0,0,0,1.335-.553L23.685,2.75A1,1,0,0,0,23.685,1.336Z" />
            <path
              d="M21.9,9.016a1,1,0,0,0-1.162.807l-.128.709A3,3,0,0,1,17.657,13H5.418l-.94-8H11a1,1,0,0,0,0-2H4.242L4.2,2.648A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.829-2H17.657a5,5,0,0,0,4.921-4.113l.128-.71A1,1,0,0,0,21.9,9.016Z" />
          </svg>
        </a>
        <div class="card-footer">
          <p class="text-muted text-center" style="font-size: 14px;">La compra por pedidos puede elevar su precio dado a
            que no esta sujeto a nuestras ofertas</p>
        </div>
      </div>
    </div>

    <?php } ?>
  </div>
</div>
<?php } ?>
<?php include '../../shared/footer.php' ?>