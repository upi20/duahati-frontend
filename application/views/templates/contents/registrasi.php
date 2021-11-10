<div class="wrap-login100 p-t-30 p-b-50 card px-3 mx-4 py-4" style="background-color: rgba(255, 255, 255, .7); border-radius: 30px;">
  <img src="<?= base_url() ?>assets/img/custom/duahati_warna.png" alt="" class="px-5 mb-3">
  <h3 class="h5 text-center mb-3 mt-1">Registrasi Member</h3>
  <form action="<?= base_url() ?>home" method="get" id="fmain">
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Nama Lengkap" name="nama" id="nama" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Email" name="email" id="email" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" style="border-radius:30px 0 0 30px;">+62</span>
      <input type="text" class="form-control" aria-label="No Whatsapp" name="telepon" id="telepon" placeholder="No Whatsapp" style="border-radius:0 30px 30px 0; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="text" class="form-control p-2 ps-3" placeholder="Kode Referral (Boleh Kosong)" name="referral" id="referral" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="password" class="form-control p-2 ps-3" placeholder="Password" name="password" id="password" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-3">
      <input type="password" class="form-control p-2 ps-3" placeholder="Ulangi Password" name=" " id="password_repeat" style="border-radius:30px; background-color: rgba(255, 255, 255, .75);">
    </div>
    <div class="form-group mb-1">
      <button type="submit" class="btn btn-indigo btn-block" style="width:100%; border-radius:30px" id="btn-submit">Registrasi</button>
    </div>
  </form>
  <div class="text-center mb-3 ">
    <p class="mt-3 mb-0">Sudah punya akun?</p>
    <a class="text-decoration-none fw-bold text-primary" href="<?= base_url() ?>login">Masuk Disini</a>
  </div>
</div>