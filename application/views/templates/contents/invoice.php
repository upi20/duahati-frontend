<style>
  .no_rek {
    color: #F55C2C;
    border: 0;
    padding: 0;
    font-weight: bold;
  }

  .no_rek:focus {
    color: #F55C2C;
    border: 0;
    padding: 0;
    font-weight: bold;
  }

  .no_rek:focus {
    color: #F55C2C;
    border: 0;
    padding: 0;
    font-weight: bold;
  }
</style>
<div class="wrap-login100 p-t-30 p-b-50 card px-3 mx-4 py-4" style="background-color: rgba(255, 255, 255, 0); border-radius: 30px; border: 0;">
  <h3 class="h4 text-center mb-3 mt-1">Informasi Inovice</h3>

  <div class="shadow-sm rounded-15 p-3 bg-white mb-2">
    <div class="d-flex justify-content-between align-items-center ">
      <span>Nominal Pembayaran</span>
      <span class="text-success fw-bold" id="biaya_pendaftaran"></span>
    </div>
  </div>

  <div class="shadow-sm rounded-15 p-3 bg-white mb-2">
    <div class="d-flex justify-content-between align-items-center ">
      <span>Nama</span>
      <span class="fw-bold" id="nama"></span>
    </div>

    <div class="d-flex justify-content-between align-items-center ">
      <span>Whatsapp</span>
      <div id="whatsapp"></div>
    </div>

    <div class="d-flex justify-content-between align-items-center ">
      <span>Email</span>
      <span class="fw-bold" id="email"></span>
    </div>
    <h6 class="p-0 m-0">Keterangan:</h6>
    <p>Pembayaran Registrasi Member Baru</p>
  </div>

  <div class="shadow-sm rounded-15 p-3 bg-white">
    <div class="w-100 text-center">
      <h5>Pembayaran Bisa Menggunakan:</h5>
    </div>
    <div id="container-rekening">

    </div>

  </div>
  <div class="form-group my-2 text-center">
    <a href="<?= base_url() ?>registrasi/konfirmasi?token=<?= isset($_GET['token']) ? $_GET['token'] : '' ?>" class="btn btn-indigo btn-block mb-2" style="width:100%; border-radius:30px" id="btn-submit">Konfirmasi Pembayaran</a>
    <a class="text-decoration-none text-secondary" href="<?= base_url() ?>login">Batalkan Pembayaran</a>
  </div>

  <div class="text-center mb-3 ">
    <span class="mt-3 mb-0">Sudah punya akun?</span>
    <a class="text-decoration-none fw-bold text-primary" href="<?= base_url() ?>login">Masuk Disini</a>
  </div>
</div>

<script>
  const api_key = '<?= isset($_GET['token']) ? $_GET['token'] : '' ?>';
</script>