<div class="container">
  <div class="card user-info-card mb-2">
    <div class="card-body d-flex align-items-center">
      <div class="user-profile me-3"><img id="img-profile" src="<?= base_url() ?>assets/img/custom/2.jpg" onerror="this.src='<?= base_url() ?>assets/img/custom/2.jpg'" style="
      margin: auto;
              position: absolute;
              margin: auto;
              width: 100%;
              max-height: 80px;
              border-radius: 150px;
              object-fit: cover; /* cover, contain, fill, scale-down */
              object-position: center;
              -webkit-border-radius: 150px;
              -moz-border-radius: 150px;" alt=""></i>
      </div>
      <div class="user-info">
        <h5 class="mb-1" id="p_nama"></h5>
        <div class="d-flex align-items-center">
          <span style="margin-right:10px;" id="p_telepon"></span>
        </div>
        <div class="d-flex align-items-center">
          <span style="margin-right:10px;">Since <span id="since"></span></span>
        </div>
      </div>
    </div>
  </div>
  <h6 class="mb-3 text-center">Update Profile</h6>
  <form action="" id="fmain">
    <div class="form-group">
      <label class="form-label" for="foto_profile">Foto Profile</label>
      <input class="form-control border-0" id="file" name="file" type="file" accept="image/*">
    </div>
    <div class="form-group">
      <label class="mb-2 mt-1 ms-2" for="nama">Nama Lengkap</label>
      <input type="text" class="form-control" style="border-radius: 30px;" id="nama" name="nama" placeholder="Nama Lengkap" required />
    </div>
    <div class="form-group">
      <label class="mb-2 mt-1 ms-2" for="email">Email</label>
      <input type="email" class="form-control" style="border-radius: 30px;" id="email" name="email" placeholder="Email" required />
    </div>
    <div class="form-group">
      <label class="mb-2 mt-1 ms-2" for="telepon">No Whatsapp</label>
      <input type="text" class="form-control" style="border-radius: 30px;" id="telepon" name="telepon" placeholder="No Whatsapp" required />
    </div>
    <div class="form-group">
      <label class="mb-2 mt-1 ms-2" for="password">Password</label>
      <input type="password" class="form-control" style="border-radius: 30px;" id="password" name="password" placeholder="Password" value="" autocomplete="off" />
    </div>
    <div class="form-group">
      <label class="mb-2 mt-1 ms-2" for="password1">Ulangi password</label>
      <input type="password" class="form-control" style="border-radius: 30px;" id="password1" name="password1" placeholder="Ulangi password" value="" autocomplete="off" />
    </div>
    <button class="btn btn-primary w-100 mb-3" type="submit" style="border-radius: 30px;">Simpan</button>
    <button class="btn btn-danger w-100" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal" style="border-radius: 30px;">Logout</button>
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body text-center">
        Apakah anda yakin ..?
      </div>
      <div class="modal-footer py-2 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" id="btn-logout">Confirm</button>
      </div>
    </div>
  </div>
</div>

<br><br><br>