<style>
  .select2.select2-container {
    width: 100% !important;
  }

  .select2.select2-container .select2-selection {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    border-style: solid;
    padding: 0.3rem;
    height: 41px;
    max-height: 41px;
    font-size: 14px;
    color: #073984;
    background-color: #ffffff;
    border-width: 1px;
    border-color: #ebebeb;
    border-radius: 5px;
    color: #8480ae;
  }

  .select2.select2-container .select2-selection .select2-selection__rendered {
    color: #8480ae;
    line-height: 32px;
    padding-right: 33px;
  }

  .select2.select2-container .select2-selection .select2-selection__arrow {
    background: #f8f8f8;
    border-left: 1px solid #ccc;
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
    height: 40px;
    width: 33px;
  }

  .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
    background: #f8f8f8;
  }

  .select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
    -webkit-border-radius: 0 3px 0 0;
    -moz-border-radius: 0 3px 0 0;
    border-radius: 0 3px 0 0;
  }

  .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
    border: 1px solid #34495e;
  }

  .select2.select2-container .select2-selection--multiple {
    height: auto;
    min-height: 41px;
  }

  .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
    margin-top: 0;
    height: 32px;
  }

  .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
    display: block;
    padding: 0 4px;
    line-height: 29px;
  }

  .select2.select2-container .select2-selection--multiple .select2-selection__choice {
    background-color: #f8f8f8;
    border: 1px solid #ccc;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    margin: 4px 4px 0 0;
    padding: 0 6px 0 22px;
    height: 24px;
    line-height: 24px;
    font-size: 12px;
    position: relative;
  }

  .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
    position: absolute;
    top: 0;
    left: 0;
    height: 22px;
    width: 22px;
    margin: 0;
    text-align: center;
    color: #e74c3c;
    font-weight: bold;
    font-size: 16px;
  }

  .select2-container .select2-dropdown {
    background: transparent;
    border: none;
    margin-top: -5px;
  }

  .select2-container .select2-dropdown .select2-search {
    padding: 0;
  }

  .select2-container .select2-dropdown .select2-search input {
    outline: none !important;
    border: 1px solid #ebebeb !important;
    border-bottom: none !important;
    padding: 4px 6px !important;
    border-radius: 8px 8px 0 0;

  }

  .select2-container .select2-dropdown .select2-results {
    padding: 0;
  }

  .select2-container .select2-dropdown .select2-results ul {
    background: #fff;
    border: 1px solid #ebebeb !important;
    border-radius: 0 0 8px 8px;
  }

  .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
    background-color: #3498db;
  }
</style>
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
  <h6 class="mb-2 ms-2">Update Profile</h6>
  <div class="card shadow-sm rounded-15">
    <div class="card-body">
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
          <label class="mb-2 mt-1 ms-2" for="nama_panggilan">Nama Panggilan</label>
          <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="Nama Panggilan" />
        </div>

        <!-- tanggal lahir -->
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" />
        </div>

        <!-- jenis kelamin -->
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control w-100" name="jenis_kelamin" id="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <!-- status -->
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="status">Status</label>
          <select class="form-control w-100" name="status" id="status">
            <option value="">Pilih Status</option>
            <option value="0">Belum Menikah</option>
            <option value="1">Sudah Menikah</option>
          </select>
        </div>

        <hr>
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

        <hr>
        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="alamat_provinsi">Provinsi</label>
          <select class="form-control w-100" name="alamat_provinsi" id="alamat_provinsi">
            <option value="">Pilih Provinsi</option>
          </select>
        </div>

        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="alamat_kabupaten_kota">Kabupaten/Kota</label>
          <select class="form-control w-100" name="alamat_kabupaten_kota" id="alamat_kabupaten_kota">
            <option value="">Pilih Kabupaten/Kota</option>
          </select>
        </div>

        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="alamat_kecamatan">Kecamatan</label>
          <select class="form-control w-100" name="alamat_kecamatan" id="alamat_kecamatan">
            <option value="">Pilih Kecamatan</option>
          </select>
        </div>

        <div class="form-group">
          <label class="mb-2 mt-1 ms-2" for="alamat_desa_kelurahan">Desa/Kelurahan</label>
          <select class="form-control w-100" name="alamat_desa_kelurahan" id="alamat_desa_kelurahan">
            <option value="">Pilih Desa/Kelurahan</option>
          </select>
        </div>

        <div class="form-group">
          <label for="detail_lainnya">Detail Lainnya</label>
          <textarea type="text" class="form-control" id="detail_lainnya" name="detail_lainnya" placeholder="Detail Lainnya" rows="1"></textarea>
        </div>

        <button class="btn btn-indigo w-100 mb-3" type="submit">Simpan</button>
        <button class="btn btn-danger w-100" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
      </form>
    </div>
  </div>
</div>