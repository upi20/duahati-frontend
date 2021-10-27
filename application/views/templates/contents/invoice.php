<div class="wrap-login100 p-t-30 p-b-50 card px-3 mx-4 py-4" style="background-color: rgba(255, 255, 255, 0); border-radius: 30px; border: 0;">
  <h3 class="h4 text-center mb-3 mt-1">Detail Inovice</h3>

  <div class="shadow-sm rounded-15 p-3 bg-white mb-2">
    <div class="d-flex justify-content-between align-items-center ">
      <span>No. Invoice</span>
      <span class="fw-bold">REG202110270001</span>
    </div>
    <div class="d-flex justify-content-between align-items-center ">
      <span>Nominal Pembayaran</span>
      <span class="text-success fw-bold">IDR. 80.000</span>
    </div>
  </div>

  <div class="shadow-sm rounded-15 p-3 bg-white mb-2">
    <div class="d-flex justify-content-between align-items-center ">
      <span>Nama</span>
      <span class="fw-bold">Isep Lutpi Nur</span>
    </div>

    <div class="d-flex justify-content-between align-items-center ">
      <span>Whatsapp</span>
      <a class="fw-bold text-decoration-none" href="https://api.whatsapp.com/send?phone=+6285798132505">+6285798132505</a>
    </div>

    <div class="d-flex justify-content-between align-items-center ">
      <span>Email</span>
      <span class="fw-bold">iseplutpi@gmail.com</span>
    </div>
    <h6 class="p-0 m-0">Keterangan:</h6>
    <p>Pembayaran Registrasi Member Baru</p>
  </div>

  <div class="shadow-sm rounded-15 p-3 bg-white">
    <div class="w-100 text-center">
      <h5>Pembayaran Transfer:</h5>
    </div>
    <h6 class="my-0 py-0">Bank Negara Indonesia</h6>
    <span>Nomor Rekening:</span>
    <div class="d-flex justify-content-between align-items-center">
      <span class="text-warning">8888 2342 9990 23422</span>
      <a href="#" class="text-decoration-none">Salin</a>
    </div>
    <span>Atas Nama:</span>
    <p class="fw-bold">Fahrel Adriansyah</p>
    <h6 class="my-0 py-0">Bank Rakyat Indonesia</h6>
    <span>Nomor Rekening:</span>
    <div class="d-flex justify-content-between align-items-center">
      <span class="text-warning">2222 2322 2333 222</span>
      <a href="#" class="text-decoration-none">Salin</a>
    </div>
    <span>Atas Nama:</span>
    <p class="fw-bold">Isep Lutpi Nur</p>

  </div>
  <div class="form-group my-2 text-center">
    <!-- <button type="submit" class="btn btn-indigo btn-block mb-2" style="width:100%; border-radius:30px" id="btn-submit">Konfirmasi Pembayaran</button> -->
    <a href="<?= base_url() ?>registrasi/konfirmasi" class="btn btn-indigo btn-block mb-2" style="width:100%; border-radius:30px" id="btn-submit">Konfirmasi Pembayaran</a>
    <a class="text-decoration-none text-secondary" href="<?= base_url() ?>login">Batalkan Pembayaran</a>
  </div>

  <div class="text-center mb-3 ">
    <span class="mt-3 mb-0">Sudah punya akun?</span>
    <a class="text-decoration-none fw-bold text-primary" href="<?= base_url() ?>login">Masuk Disini</a>
  </div>
</div>