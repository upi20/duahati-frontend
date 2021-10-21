<div style="width: 100%; position:fixed; bottom:16px; z-index:98">
  <div class="container">
    <div class="d-flex justify-content-end align-items-center">
      <a href="<?= base_url() ?>/home" class=" m-0 btn btn-primary shadow-lg fw-bold d-flex justify-content-end align-items-center" style="width: 50px;
          border-radius: 50%;
          height: 50px;">
        <i class="bi bi-house w-100" style="font-size: 1.2rem;"></i>
      </a>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade bg-dark" id="adsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="adsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body" style="min-height: 300px;" style="z-index:99">
        <div class="d-flex justify-content-end m-0 p-0">
          <div id="hide_ads">
          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" id="body_ads" style="min-height: 300px;">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- All JavaScript Files -->
<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/active.js"></script>
<!-- PWA -->
<script src="<?= base_url() ?>assets/js/pwa.js"></script>

<!-- moment js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  const global_id_pertandingan = '<?= isset($id_pertandingan) ? $id_pertandingan : '' ?>';
  const api_base_url = '<?= $this->config->item('api_base_url') ?>';

  // cek login
  let value_key = localStorage.getItem('key')
  cekAuth()

  function cekAuth() {
    if (value_key == null) {
      window.location = '<?= base_url() ?>/login';
    }
  }

  function setBtnLoading(element, text, status = true) {
    const el = $(element);
    if (status) {
      el.attr("disabled", "");
      el.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ${text}`);
    } else {
      el.removeAttr("disabled");
      el.html(text);
    }
  }

  toast_last_background = '';

  document.getElementById('header_profile_name').innerText = localStorage.getItem('nama');

  if ($("#pertandingan").length) {
    renderheader();
  }


  function renderheader() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/list_pertandingan',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      const data = datas.data;
      $("#header_team_1_foto").attr('src', `${api_base_url}../files/team/${data.tim_1_foto}`);
      $("#header_team_2_foto").attr('src', `${api_base_url}../files/team/${data.tim_2_foto}`);
      $("#header_team_1_label").text(data.tim_1);
      $("#header_team_2_label").text(data.tim_2);
    }).fail(($xhr) => {

    })
  }

  function setAds(
    content = '<span>Space Ads Auto Close After 10 Secconds</span>',
    time = 10
  ) {
    const myModal = new bootstrap.Modal(document.getElementById('adsModal'), {
      keyboard: false
    })

    // timeout
    const display = document.getElementById('hide_ads');
    display.innerHTML = 10;
    const body = document.getElementById('body_ads');
    body.innerHTML = content;
    let count = time;
    const interval = 10 * 1000;
    const intervalAds = setInterval(() => {
      count--;
      display.innerHTML = count;
      console.log(count);

    }, 1000);
    setTimeout(() => {
      clearInterval(intervalAds);
      display.innerHTML = `<button type="button" class="btn-close btn-sm m-0 p-0" onclick="document.getElementById('body_ads').innerHTML = ''" data-bs-dismiss="modal" aria-label="Close"></button>`;
    }, interval);
    myModal.show();
  }
</script>
<script src="<?= base_url() ?>assets/js/toast.js"></script>
<?php if (file_exists(VIEWPATH . "javascripts/contents/{$content}.js")) : ?>
  <script src="<?= $this->plugin->build_url("javascripts/contents/{$content}.js") ?>" type="text/javascript"></script>
<?php endif; ?>
</body>

</html>