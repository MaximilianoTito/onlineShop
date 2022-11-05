<?php include '../shared/header.php' ?>
<?php include '../shared/nav.php' ?>
<div class="p-3">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="data:image/jpeg;base64,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"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
        <button class="btn btn-danger">Buy</button>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWZKAjOFDdIicSDMjvRh_Fbqtdgtj1Z2_Pzg&usqp=CAU"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="https://www.yanbal.com/medias/rostro.jpg?context=bWFzdGVyfGltYWdlc3wxMDk1M3xpbWFnZS9qcGVnfGltYWdlcy9oMzcvaDJjLzkxMTE0MDY4Mzc3OTAuanBnfDcxYTNlMWU1NmMyOTBmNmY2MmM5ODU0ODliMjU3OGQ1YjM2MzdmMzk3OTljOTI3ZTU5MTRkNzc5MGMwZDg3Zjg"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6NzODTvVPon_yVmg5my9evzi9SFzLcIjEw&usqp=CAU"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="data:image/jpeg;base64,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"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWZKAjOFDdIicSDMjvRh_Fbqtdgtj1Z2_Pzg&usqp=CAU"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a short card.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="https://www.yanbal.com/medias/rostro.jpg?context=bWFzdGVyfGltYWdlc3wxMDk1M3xpbWFnZS9qcGVnfGltYWdlcy9oMzcvaDJjLzkxMTE0MDY4Mzc3OTAuanBnfDcxYTNlMWU1NmMyOTBmNmY2MmM5ODU0ODliMjU3OGQ1YjM2MzdmMzk3OTljOTI3ZTU5MTRkNzc5MGMwZDg3Zjg"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="img rounded-start rounded-end"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6NzODTvVPon_yVmg5my9evzi9SFzLcIjEw&usqp=CAU"
          alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../shared/footer.php' ?>