<div class="container bg-white">
  <form action="" id="fmain">
    <!-- Single Blog Card -->
    <div class="px-3 mb-1">
      <div class="d-flex align-items-start">
        <span class="h5 fw-bold text-dark me-3">Kursi VIP</span>
        <div class="me-3" id="diambil">
          <span class="bg-info me-1 rounded" style="padding:0 11px 0 11px;"></span>
          <span>Diambil</span>
        </div>
        <div class="me-3">
          <span class="bg-primary me-1 rounded" style="padding:0 11px 0 11px;"></span>
          <span>Terisi</span>
        </div>
        <div class="me-3">
          <span class="bg-light me-1 rounded" style="padding:0 11px 0 11px;"></span>
          <span>Kosong</span>
        </div>
      </div>
    </div>
    <div class="row p-2 px-3 text-center" id="input">

    </div>
    <div class="d-grid gap-2 px-3 mt-2" id="container-submit">
      <button class="btn btn-primary" type="submit" style="border-radius: 30px;">Checkout</button>
    </div>
  </form>
</div>

<script>
  const global_id_kategori = '<?= $id_kategori ?>';
</script>