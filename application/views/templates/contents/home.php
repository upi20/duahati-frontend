<!-- slider -->
<div class="tiny-slider-one-wrapper mb-3">
  <div class="tiny-slider-one" id="container-slider">



  </div>
</div>

<!-- mentor -->
<div class="container my-3">
  <!-- Kelas Information-->
  <div class="card user-info-card shadow-sm rounded-15">
    <div class="card-body ">
      <div class="d-flex align-items-center mb-2">
        <div class="user-profile me-3 shadow-sm" style="overflow: hidden;">
          <img id="mentor_gambar" style="margin: auto;
              position: absolute;
              margin: auto;
              width: 100%;
              border-radius: 150px;
              -webkit-border-radius: 150px;
              -moz-border-radius: 150px;" onerror="this.src='<?= base_url() ?>assets/img/custom/2.jpg'" src="<?= base_url() ?>assets/img/custom/2.jpg" alt="Mentor"></i>
        </div>
        <div class="user-info">
          <h5 class="mb-1" id="mentor_nama"></h5>
          <div class="d-flex align-items-center">
            <span>Mentor Dua hati</a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <h5 class="h6 text-dark">Periode Aktif</h5>
        <p id="mentor_periode_aktif"></p>
      </div>
      <p>Konsultasikan semua masalah anda secara personal.</p>
      <div class="d-flex flex-row-reverse">
        <a id="mentor_no_whatsapp" href="" class="btn btn-sm btn-indigo shadow-sm text-white rounded-20"><i class="bi bi-whatsapp"></i> Sapa Yuk</a>
      </div>
    </div>
  </div>
</div>

<!-- tombol -->
<div class="container">
  <div class="card my-3 shadow-sm rounded-15">
    <div class="card-body">
      <div class="row g-3">
        <div class="col-4">
          <a href="<?= $nav_url->tutorial ?>" class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>assets/img/custom/button/tutorial.svg" alt=""></div>
            <p class="mb-0">Tutorial</p>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= $nav_url->belajar ?>" class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>assets/img/custom/button/belajar.svg" alt=""></div>
            <p class="mb-0">Belajar</p>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= $nav_url->news ?>" class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>assets/img/custom/button/news.svg" alt=""></div>
            <p class="mb-0">News</p>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= $nav_url->referral ?>" class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>assets/img/custom/button/referral.svg" alt=""></div>
            <p class="mb-0">Referral</p>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= $nav_url->vip ?>" class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>assets/img/custom/button/vip.svg" alt=""></div>
            <p class="mb-0">VIP</p>
          </a>
        </div>
        <div class="col-4">
          <a href="<?= $nav_url->profile ?>" class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>assets/img/custom/button/profile.svg" alt=""></div>
            <p class="mb-0">Profile</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Top news -->
<div class="container">
  <!-- Element Heading -->
  <div class="element-heading mt-3">
    <div class="d-flex justify-content-between align-items-between">
      <h6>Top News</h6>
      <a href="">View All </a>
    </div>
  </div>
</div>
<!-- Tiny Slider Three -->
<!-- Tiny Slider Three Wrapper -->
<div class="container px-0">
  <div class="tiny-slider-three-wrapper">
    <div class="tiny-slider-three">
      <!-- item -->
      <div>
        <div class="single-hero-slide bg-img" style="background-image: url('<?= base_url() ?>template/img/bg-img/35.jpg')">
          <div class="slide-content">
            <h2>Berita Pertama</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, sequi?</p>
            <div class="d-flex justify-content-end align-items-center">
              <a class="btn btn-creative btn-indigo rounded-15" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- item -->
      <div>
        <div class="single-hero-slide bg-img" style="background-image: url('<?= base_url() ?>template/img/bg-img/35.jpg')">
          <div class="slide-content">
            <h2>Berita Kdeua</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, sequi?</p>
            <div class="d-flex justify-content-end align-items-center">
              <a class="btn btn-creative btn-indigo rounded-15" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- item -->
      <div>
        <div class="single-hero-slide bg-img" style="background-image: url('<?= base_url() ?>template/img/bg-img/35.jpg')">
          <div class="slide-content">
            <h2>Berita Ketiga</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, sequi?</p>
            <div class="d-flex justify-content-end align-items-center">
              <a class="btn btn-creative btn-indigo rounded-15" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>