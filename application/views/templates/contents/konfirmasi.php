<div class="wrap-login100 p-t-30 p-b-50 card px-3 mx-4 py-4" style="background-color: rgba(255, 255, 255, .7); border-radius: 30px;">
  <div id="alert_con" style="display: none;">
    <div id="alert_sub_con" class="alert alert-dismissible fade show" role="alert" style="border-radius: 15px;">
      <span id="alert_fill"></span>
      <button type="button" class="close btn" data-dismiss="alert" onclick="$('#alert_con').fadeOut()" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  <h3 class="h5 text-center mb-3 mt-1">Konfirmasi Pembayaran</h3>
  <form action="<?= base_url() ?>home" method="get" id="fmain">
    <input id="id_member" name="id_member" type="hidden"></input>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" readonly placeholder="Nama Lengkap" value="" name="nama" id="nama" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" readonly placeholder="Email" value="" name="email" id="email" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" readonly placeholder="No Whatsapp" value="" name="telepon" id="telepon" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>

    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Atas Nama" name="atas_nama" value="" id="atas_nama" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);" required>
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Nama Bank" name="bank_nama" value="" id="bank_nama" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);" required>
    </div>
    <div class="form-group mb-3">
      <input type="number" class="form-control p-2 ps-3" placeholder="Nomor Rekening" name="no_rekening" value="" id="no_rekening" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);" required>
    </div>
    <div class="form-group mb-3">
      <input type="number" class="form-control p-2 ps-3" placeholder="Nominal" name="nominal" value="" id="nominal" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);" required>
    </div>
    <div class="form-group mb-3">
      <input type="date" class="form-control p-2 ps-3" placeholder="Tanggal" name="tanggal" value="" id="tanggal" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);" required>
    </div>

    <div class="form-group mb-3">
      <label class="ms-2" for="file">Bukti Pembayaran</label>
      <input class="form-control border-0 rounded-15" id="file" name="file" type="file" accept="image/*" required>
    </div>
    <div class="form-group mb-1">
      <button type="submit" class="btn btn-indigo btn-block" style="width:100%; border-radius:30px" id="btn-submit">Konfirmasi</button>
    </div>

  </form>
  <div class="text-center mb-3 ">
    <span class="mt-3 mb-0">Sudah punya akun?</span> <a class="text-decoration-none fw-bold text-primary" href="<?= base_url() ?>login">Masuk Disini</a>
  </div>
</div>

<script>
  const token = '<?= $token ?>';
</script>