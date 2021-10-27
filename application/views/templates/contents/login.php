<div class="wrap-login100 p-t-30 p-b-50 card px-3 mx-4 py-4 shadow-lg" style="background-color: rgba(255, 255, 255, .7); border-radius: 30px;">
  <img src="<?= base_url() ?>assets/img/custom/duahati_warna.png" alt="" class="px-5 mb-3">

  <form action="" method="post" id="flogin">
    <div class="form-group mb-3">
      <input type="email" class="form-control p-2 ps-3" placeholder="Masukan Email" name="email" id="email" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="password" class="form-control p-2 ps-3" placeholder="Masukan Password" name="password" id="password" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-1">
      <button type="submit" class="btn btn-indigo w-100 fw-bold mb-3 text-white" style="width:100%; border-radius:30px" id="btn-submit">Masuk</button>
      <a href="<?= base_url() ?>/registrasi" class="btn btn-danger w-100 fw-bold mb-3 text-white" style="width:100%; border-radius:30px" type="submit" id="btn-submit">Buat Akun Baru</a>
    </div>
  </form>
  <div class="text-center mb-3 ">
    <div class="login-meta-data d-flex justify-content-evenly align-items-center">
      <!-- <p class="mt-3"><a class="stretched-link text-decoration-none" href="#"><i class="bi bi-check-circle"></i> Konfirmasi Pembayaran</a></p>
          <div class="m-0 p-0 stretched-link" style="font-size: 1.5rem;">|</div> -->
      <a class="text-decoration-none" href="#"><i class="bi bi-play-circle"></i> Demo Kelas</a>
    </div>
  </div>
</div>