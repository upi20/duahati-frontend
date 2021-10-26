<style>
  .btn-danger {
    background-color: #ED6868;
  }

  .btn-danger:focus {
    background-color: #F97A7A;
  }

  .btn-danger:hover {
    background-color: #F97A7A;
  }

  .btn-indigo {
    background-color: #373459;
  }

  .btn-indigo:focus {
    background-color: #4C4592;
  }

  .btn-indigo:hover {
    background-color: #4C4592;
  }
</style>
<div class="header-style-two position-relative d-flex align-items-center justify-content-start py-3 bg-white">
  <div class="container">
    <div class="logo-wrapper"><a href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/img/custom/duahati_warna.png" alt="" style="max-height: 50px; margin-bottom: 5px;"></a></div>
  </div>
</div>
<div class="w-100 bg-light py-2">
</div>
<div class="bg-white py-5 d-flex justify-content-center align-items-center" style="min-height: 65vh;">
  <div class="container">
    <div class="text-center mb-3">
      <h2 style="color:#DB4664; font-weight:bold">Selamat Datang</h2>
      <h6 style="color:#DB4664">di Aplikasi Duahati</h6>
    </div>
    <form action="<?= base_url() ?>home" method="post" id="flogin">
      <div id="form-input">
        <div class="form-group">
          <!-- <label for="email" class="ms-1">Email</label> -->
          <input type="text" class="form-control mt-2" id="email" name="email" placeholder="Masukan Email" required />
        </div>

        <div class="form-group">
          <!-- <label for="password" class="ms-1">Password</label> -->
          <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Masukan Password" required />
        </div>
      </div>
      <button class="btn btn-danger w-100 fw-bold mb-3" type="submit" id="btn-submit">Masuk</button>
      <button class="btn btn-indigo w-100 fw-bold mb-3 text-white" type="submit" id="btn-submit">Buat Akun Baru</button>
      <div class="login-meta-data d-flex justify-content-evenly align-items-center">
        <p class="mt-3"><a class="stretched-link text-decoration-none" href="#"><i class="bi bi-check-circle"></i> Konfirmasi Pembayaran</a></p>
        <div class="m-0 p-0 stretched-link" style="font-size: 1.5rem;">|</div>
        <p class="mt-3"><a class="stretched-link text-decoration-none" href="#"><i class="bi bi-play-circle"></i> Demo Kelas</a></p>
      </div>
    </form>
  </div>
</div>