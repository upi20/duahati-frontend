<div class="container mt-2">
  <!-- User Information-->
  <div class="card user-info-card mb-3 shadow-sm rounded-15">
    <div class="card-body d-flex align-items-center">
      <div class="user-profile me-3"><img id="img-profile" src="<?= base_url() ?>assets/img/custom/2.jpg" onerror="this.src='<?= base_url() ?>assets/img/custom/2.jpg'" alt=""></i>
      </div>
      <div class="user-info">
        <h5 class="mb-1" id="nama"></h5>
        <div class="d-flex align-items-center">
          <span style="margin-right:10px;" id="kode_referral"></span>
        </div>
        <div class="d-flex align-items-center" id="pengundang">

        </div>
      </div>
    </div>
  </div>

  <!-- reward -->
  <div class="card shadow-sm rounded-15 mb-3">
    <div class="card-body d-flex flex-column ">
      <h6>Reward</h6>
      <span id="pencairan_total"></span>
      <span id="pencairan_dicairkan"></span>
      <span id="pencairan_belum_dicairkan"></span>
      <div class="d-flex justify-content-end align-items-center">
        <button href="<?= base_url() ?>referral/pencairan" class="btn btn-indigo rounded-20" type="button" data-bs-toggle="modal" data-bs-target="#modal_pencairan">Pencairan</button>
      </div>
    </div>
  </div>

  <!-- riwayat pencairan -->
  <div class="card shadow-sm rounded-15 mb-3">
    <div class="card-body d-flex flex-column ">
      <h6>Riwayat Pencairan</h6>
      <table id="tbl_pencairan" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nominal</th>
            <th>Status</th>
            <th>Detail</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <!-- riwayat pendapatan -->

  <!-- undang -->
  <div class="card shadow-sm rounded-15 mb-3">
    <div class="card-body d-flex flex-column ">
      <h6>Mengundang</h6>
      <table id="tbl_undang" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Detail</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>

<!-- Form Pencairan -->
<div class="modal fade" id="modal_pencairan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_pencairanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal_pencairanLabel">Pengajuan Pencairan</h6>
        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="fcairkan">
          <div class="form-group">
            <label for="nama_bank">Nama Bank</label>
            <input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="Nama Bank" required />
          </div>
          <div class="form-group">
            <label for="no_rekening">No Rekening</label>
            <input type="text" class="form-control" id="no_rekening" name="no_rekening" placeholder="No Rekening" required />
          </div>
          <div class="form-group">
            <label for="atas_nama">Atas Nama</label>
            <input type="text" class="form-control" id="atas_nama" name="atas_nama" placeholder="Atas Nama" required />
          </div>
          <div class="form-group">
            <label for="jumlah_dana">Jumlah Dana</label>
            <input type="number" class="form-control" id="jumlah_dana" name="jumlah_dana" placeholder="Jumlah Dana" min="1" required />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-sm btn-success" form="fcairkan" type="submit">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Form Pencairan -->
<div class="modal fade" id="modal_detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal_detailLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal_detailLabel">Detail Pencairan</h6>
        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td>Tgl. Input</td>
            <td class="ps-2">:</td>
            <td id="detail_tgl_input"></td>
          </tr>
          <tr>
            <td>Tgl. Respon</td>
            <td class="ps-2">:</td>
            <td id="detail_tgl_respon"></td>
          </tr>
          <tr>
            <td>Nama Bank</td>
            <td class="ps-2">:</td>
            <td id="detail_nama_bank"></td>
          </tr>
          <tr>
            <td>No Rekening</td>
            <td class="ps-2">:</td>
            <td id="detail_no_rekening"></td>
          </tr>
          <tr>
            <td>Atas Nama</td>
            <td class="ps-2">:</td>
            <td id="detail_atas_nama"></td>
          </tr>
          <tr>
            <td>Jumlah Dana</td>
            <td class="ps-2">:</td>
            <td id="detail_jumlah_dana"></td>
          </tr>
          <tr>
            <td>Status</td>
            <td class="ps-2">:</td>
            <td id="detail_status"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-sm btn-success" form="fcairkan" type="submit">Submit</button>
      </div>
    </div>
  </div>
</div>