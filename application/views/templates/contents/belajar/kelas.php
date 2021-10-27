<div class="container mt-2">
  <!-- Kelas Information-->
  <div class="card user-info-card mb-3 shadow-sm rounded-15">
    <div class="card-body d-flex align-items-center">
      <div class="user-profile me-3"><img id="kelas_foto" src="<?= base_url() ?>assets/img/custom/2.jpg" onerror="this.src='<?= base_url() ?>assets/img/custom/2.jpg'" alt="" style="
      margin: auto;
              position: absolute;
              margin: auto;
              max-width: 80px;
              max-height: 80px;
              min-width: 80px;
              min-height: 80px;
              border-radius: 150px;
              object-fit: cover; /* cover, contain, fill, scale-down */
              object-position: center;"></i>
      </div>
      <div class="user-info">
        <div class="d-flex align-items-center">
          <h5 class="mb-1 kelas_nama"></h5><span class="badge bg-warning ms-2 rounded-pill" id="kelas_kategori"></span>
        </div>
        <div class="skill-data">
          <!-- Skill Name -->
          <div class="skill-name d-flex align-items-center justify-content-between">
            <p class="mb-1">Progress</p><small class="mb-1"><span class="counter" id="kelas_counter_nilai"></span> %</small>
          </div>
          <!-- Progress -->
          <div class="progress" style="height: 4px;">
            <div id="kelas_counter_bar" class="progress-bar" style="width: 0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Kelas Detail-->
  <h6 class="h6 pb-0 mt-2">Detail Kelas</h6>
  <div class="card user-info-card mb-3 shadow-sm rounded-15">
    <div class="card-body d-flex align-items-center">
      <div class="user-info w-100">
        <h6 class="kelas_nama">Kelas dasar</h6>
        <p id="kelas_keterangan"></p>
        <!-- <h6>Expired date:</h6>
        <p id="kelas_expire"></p> -->
        <h6>Hubungi Mentor:</h6>
        <a id="mentor_no_whatsapp" href="https://api.whatsapp.com/send?phone=+6285798132505"><i class="bi bi-whatsapp"></i> Whatsapp</a>
      </div>
    </div>
  </div>

  <h6 class="h6 pb-0 mt-2">Materi Kelas</h6>
  <!-- User Meta Data-->
  <div class="row g-3 justify-content-center" id="container">

  </div>
</div>

<script>
  const global_kelas_id = '<?= $kelas_id ?>';
</script>