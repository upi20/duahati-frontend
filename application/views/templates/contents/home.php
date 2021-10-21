<!-- slider -->
<div class="tiny-slider-one-wrapper">
  <div class="tiny-slider-one" id="container-slider">



  </div>
</div>
<div class="pt-3"></div>

<!-- tombol -->
<div class="container direction-rtl">
  <div class="card mb-3">
    <div class="card-body">
      <div class="row g-3">
        <div class="col-4">
          <div class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>template/img/custom/home/TUTORIAL.png" alt=""></div>
            <p class="mb-0">Tutorial</p>
          </div>
        </div>
        <div class="col-4">
          <div class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>template/img/custom/home/BELAJAR.png" alt=""></div>
            <p class="mb-0">Belajar</p>
          </div>
        </div>
        <div class="col-4">
          <div class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>template/img/custom/home/NEWS.png" alt=""></div>
            <p class="mb-0">News</p>
          </div>
        </div>
        <div class="col-4">
          <div class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>template/img/custom/home/REFERAL.png" alt=""></div>
            <p class="mb-0">Refeal</p>
          </div>
        </div>
        <div class="col-4">
          <div class="feature-card mx-auto text-center">
            <div class="card mx-auto bg-gray"><img src="<?= base_url() ?>template/img/custom/home/VIP.png" alt=""></div>
            <p class="mb-0">VIP</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- mentor -->
<div class="container">
  <!-- Kelas Information-->
  <div class="card user-info-card">
    <div class="card-body ">
      <div class="d-flex align-items-center">
        <div class="user-profile me-3" style="overflow: hidden;">
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
      <div class="accordion accordion-flush accordion-style-one ms-0 ps-0 mt-2" id="accordionStyle1">
        <!-- Single Accordion -->
        <div class="accordion-item">
          <div class="accordion-header" id="accordionOne">
            <h6 class="ms-0 ps-0" data-bs-toggle="collapse" data-bs-target="#accordionStyleOne" aria-expanded="true" aria-controls="accordionStyleOne">Details<i class="bi bi-chevron-down"></i></h6>
          </div>
          <div class="accordion-collapse collapse show" id="accordionStyleOne" aria-labelledby="accordionOne" data-bs-parent="#accordionStyle1">
            <div class="accordion-body px-0 mb-0 pb-0">
              <div class="d-flex justify-content-between">
                <h5 class="h6 text-dark">Periode Aktif</h5>
                <p id="mentor_periode_aktif"></p>
              </div>
              <p>Konsultasikan semua masalah anda secara personal.</p>
              <div class="d-flex flex-row-reverse">
                <a id="mentor_no_whatsapp" href="" class="btn btn-sm btn-primary shadow-sm"><i class="bi bi-whatsapp"></i> Sapa Yuk</a>
              </div>
            </div>
          </div>
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
            <a class="btn btn-creative btn-primary" href="#">Read More</a>
          </div>
        </div>
      </div>
      <!-- item -->
      <div>
        <div class="single-hero-slide bg-img" style="background-image: url('<?= base_url() ?>template/img/bg-img/35.jpg')">
          <div class="slide-content">
            <h2>Berita Kdeua</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, sequi?</p>
            <a class="btn btn-creative btn-primary" href="#">Read More</a>
          </div>
        </div>
      </div>
      <!-- item -->
      <div>
        <div class="single-hero-slide bg-img" style="background-image: url('<?= base_url() ?>template/img/bg-img/35.jpg')">
          <div class="slide-content">
            <h2>Berita Ketiga</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, sequi?</p>
            <a class="btn btn-creative btn-primary" href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>