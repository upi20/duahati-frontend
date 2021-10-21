<div class="custom-container">
  <div class="text-center px-4"><img class="login-intro-img" src="<?= base_url() ?>assets/img/custom/login.png" alt=""></div>
  <!-- Register Form -->
  <div class="register-form mt-4">
    <h6 class="mb-3 text-center">Login Kelas Dua Hati</h6>
    <form action="<?= base_url() ?>home" method="post" id="flogin">
      <div class="form-group">
        <input class="form-control" type="text" placeholder="Email" name="email" id="email">
      </div>
      <div class="form-group position-relative">
        <input class="form-control" id="psw-input" type="password" name="password" id="password" placeholder="Enter Password">
        <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i></div>
      </div>
      <button class="btn btn-primary w-100" type="submit" id="btn-submit">Login</button>
    </form>
  </div>
  <!-- Login Meta -->
  <div class="login-meta-data text-center">
    <p class="mt-3">Tidak punya akun? <a class="stretched-link" href="page-register.html">Daftar Sekarang</a></p>
    <p class="mt-3"><a class="stretched-link" href="page-konfirmasi.html">Konfirmasi Pembayaran</a></p>
    <p class="mt-3"><a class="stretched-link" href="#">Demo Kelas</a></p>
  </div>
</div>