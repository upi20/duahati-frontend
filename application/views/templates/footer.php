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
<br><br><br><br><br>

<div style="width: 100%; position:fixed; bottom:16px; z-index:98; right:10px">
  <div class="container">
    <div class="d-flex justify-content-end align-items-center">
      <a href="<?= base_url() ?>/home" class=" m-0 btn btn-indigo shadow-lg fw-bold d-flex justify-content-end align-items-center" style="width: 50px;
          border-radius: 50%;
          height: 50px;">
        <i class="bi bi-house w-100" style="font-size: 1.2rem;"></i>
      </a>
    </div>
  </div>
</div>
<!-- Footer Nav -->
<!-- All JavaScript Files -->
<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/slideToggle.min.js"></script>
<script src="<?= base_url() ?>assets/js/internet-status.js"></script>
<script src="<?= base_url() ?>assets/js/tiny-slider.js"></script>
<script src="<?= base_url() ?>assets/js/active.js"></script>
<!-- PWA -->
<script src="<?= base_url() ?>assets/js/pwa.js"></script>
<!-- PAGE RELATED PLUGIN(S) -->
<?php if (!empty($plugin_scripts)) : ?>
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <?php foreach ($plugin_scripts as $script) : ?>
    <script src="<?= $script ?>" type="text/javascript"></script>
  <?php endforeach; ?>
  <!-- END PAGE LEVEL PLUGINS -->
<?php endif; ?>

<!-- moment js -->
<script>
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

  // render nav
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/list_slider',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const ele = $('#container-slider');
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template(e));
      });
      initial_slider();
    }).fail(($xhr) => {})
  }


  if ($("#nav_bar_render").val() == 1) {
    profile_info();
  }

  function profile_info() {
    const nama = localStorage.getItem('nama');
    const foto = localStorage.getItem('foto');
    $("#nav_nama").text(nama);
    $("#nav_foto").attr('src', `${api_base_url}../files/member/${foto}`);
  }

  $("#btn-logout").click(() => {
    localStorage.removeItem('key');
    localStorage.removeItem('id');
    localStorage.removeItem('email');
    localStorage.removeItem('nama');
    localStorage.removeItem('level');
    localStorage.removeItem('foto');
    setTimeout(() => {
      window.location = "<?= base_url() ?>login";
    }, 200);
  })
</script>
<script src="<?= base_url() ?>assets/js/toast.js"></script>
<?php if (file_exists(VIEWPATH . "javascripts/contents/{$content}.js")) : ?>
  <script src="<?= $this->plugin->build_url("javascripts/contents/{$content}.js") ?>" type="text/javascript"></script>
<?php endif; ?>
</body>

</html>