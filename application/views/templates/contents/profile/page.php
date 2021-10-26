<div class="container mt-2">
  <div class="card user-info-card mb-2 shadow-sm rounded-15">
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
  <br>
  <h6 class="mb-2">Update Profile</h6>
  <div class="card">
    <div class="card-body shadow-sm rounded-15">
      <form action="" id="fmain">
        <div class="form-group">
          <label class="form-label" for="foto_profile">Foto Profile</label>
          <input class="form-control border-0" id="file" name="file" type="file" accept="image/*">
        </div>
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required />
        </div>
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
        </div>
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="telepon">No Whatsapp</label>
          <input type="text" class="form-control" id="telepon" name="telepon" placeholder="No Whatsapp" required />
        </div>
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" autocomplete="off" />
        </div>
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="password1">Ulangi password</label>
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Ulangi password" value="" autocomplete="off" />
        </div>
        <button class="btn btn-primary w-100 mb-3" type="submit">Simpan</button>
        <button class="btn btn-danger w-100" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
      </form>
    </div>
  </div>
</div>