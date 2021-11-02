<div class="container mt-2">
  <!-- Element Heading -->
  <div class="element-heading">
    <h5 class="h6" id="materi_nama">Tes video embed hosting</h5>
  </div>
</div>
<div class="container">
  <div class="ratio ratio-16x9" id="materi_player">
    <video controls allowfullscreen>
      <source src="https://mobile.duahati.id/tes.mp4" type="video/mp4">
    </video>
  </div>
</div>
<div class="container">
  <div class="card mt-2 shadow-sm rounded-15">
    <div class="card-body p-3">
      <h5 class="h6">Deskripsi</h5>
      <p id="materi_deskripsi"></p>
    </div>
  </div>
  <div class="card mt-2 shadow-sm rounded-15">
    <div class="card-body p-3">
      <h6 class="h6">Konsutasi</h6>
      Via: <a id="mentor_no_whatsapp" href="https://api.whatsapp.com/send?phone=+6285798132505"><i class="bi bi-whatsapp"></i> Whatsapp</a>
      <hr>
      <label class="h6 text-dark" for="feedback">Feedback mentor</label>
      <form action="" id="ffeedback">
        <input type="hidden" id="materi_id" name="materi_id">
        <input type="hidden" id="kelas_id" name="kelas_id">
        <input type="hidden" id="tonton_id" name="tonton_id" value="0">
        <div class="rating-card-three text-left mb-2">
          <div class="stars justify-content-end">
            <input class="stars-checkbox mentor" id="mentor_nilai_5" type="radio" name="nilai_mentor" value="5">
            <label class="stars-star" for="mentor_nilai_5">
              <svg class="star-icon" id="star1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox mentor" id="mentor_nilai_4" type="radio" name="nilai_mentor" value="4">
            <label class="stars-star" for="mentor_nilai_4">
              <svg class="star-icon" id="star2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox mentor" id="mentor_nilai_3" type="radio" name="nilai_mentor" value="3">
            <label class="stars-star" for="mentor_nilai_3">
              <svg class="star-icon" id="star3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox mentor" id="mentor_nilai_2" type="radio" name="nilai_mentor" value="2">
            <label class="stars-star" for="mentor_nilai_2">
              <svg class="star-icon" id="star4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox mentor" id="mentor_nilai_1" type="radio" name="nilai_mentor" value="1">
            <label class="stars-star" for="mentor_nilai_1">
              <svg class="star-icon" id="star5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="keterangan_mentor" name="keterangan_mentor" cols="3" rows="5" placeholder="Feedback untuk mentor pada materi ini."></textarea>
        </div>
        <hr>
        <label class="h6 text-dark" for="feedback">Feedback Materi</label>
        <!-- stars -->
        <div class="rating-card-three text-left mb-2">
          <div class="stars justify-content-end">
            <input class="stars-checkbox materi" id="materi_nilai_5" type="radio" name="nilai_materi" value="5">
            <label class="stars-star" for="materi_nilai_5">
              <svg class="star-icon" id="star1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox materi" id="materi_nilai_4" type="radio" name="nilai_materi" value="4">
            <label class="stars-star" for="materi_nilai_4">
              <svg class="star-icon" id="star2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox materi" id="materi_nilai_3" type="radio" name="nilai_materi" value="3">
            <label class="stars-star" for="materi_nilai_3">
              <svg class="star-icon" id="star3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox materi" id="materi_nilai_2" type="radio" name="nilai_materi" value="2">
            <label class="stars-star" for="materi_nilai_2">
              <svg class="star-icon" id="star4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
            <input class="stars-checkbox materi" id="materi_nilai_1" type="radio" name="nilai_materi" value="1">
            <label class="stars-star" for="materi_nilai_1">
              <svg class="star-icon" id="star5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182">
                </polygon>
              </svg>
            </label>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="keterangan_materi" name="keterangan_materi" cols="3" rows="5" placeholder="Feedback untuk materi ini."></textarea>
        </div>
        <button class="btn btn-indigo w-100" type="submit"><i class="bi bi-check2-square"></i> Tandai Selesai Dan Kirim Feedback</button>
      </form>
    </div>
  </div>
</div>
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center">
    <div id="sebelumnya"></div>
    <div id="selanjutnya"></div>
  </div>
</div>