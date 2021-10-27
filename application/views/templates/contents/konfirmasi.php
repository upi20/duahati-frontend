<div class="wrap-login100 p-t-30 p-b-50 card px-3 mx-4 py-4" style="background-color: rgba(255, 255, 255, .7); border-radius: 30px;">
  <h3 class="h5 text-center mb-3 mt-1">Konfirmasi Pembayaran</h3>
  <form action="<?= base_url() ?>home" method="get" id="fmain">
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" readonly placeholder="Nama Lengkap" value="Isep Lutpi Nur" name="nama" id="nama" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" readonly placeholder="Email" value="iseplutpi@gmail.com" name="email" id="email" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" readonly placeholder="No Whatsapp" value="+6285798132505" name="telepon" id="telepon" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>

    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Atas Nama" name="atas_nama" value="Isep Lutpi Nur" id="atas_nama" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Nama Bank" name="nama_bank" value="Bank Rakyat Indonesia" id="nama_bank" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="number" class="form-control p-2 ps-3" placeholder="Nomor Rekening" name="no_rekening" value="88885555444422" id="no_rekening" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>

    <div class="form-group mb-3">
      <label class="ms-2" for="file">Bukti Pembayaran</label>
      <input class="form-control border-0 rounded-15" id="file" name="file" type="file" accept="image/*">
    </div>
    <div class="form-group mb-1">
      <!-- <button type="submit" class="btn btn-indigo btn-block" style="width:100%; border-radius:30px" id="btn-submit">Konfirmasi</button> -->
      <a href="<?= base_url() ?>login" class="btn btn-indigo btn-block" style="width:100%; border-radius:30px" id="btn-submit">Konfirmasi</a>
    </div>

  </form>
  <div class="text-center mb-3 ">
    <span class="mt-3 mb-0">Sudah punya akun?</span> <a class="text-decoration-none fw-bold text-primary" href="<?= base_url() ?>login">Masuk Disini</a>
  </div>
</div>