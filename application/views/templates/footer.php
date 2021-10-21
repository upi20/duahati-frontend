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
<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
  <div class="container px-0">
    <!-- =================================== -->
    <!-- Paste your Footer Content from here -->
    <!-- =================================== -->
    <!-- Footer Content -->
    <div class="footer-nav position-relative">
      <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
        <li <?= $menu == '' ? 'class="active"' : ''; ?>>
          <a href="<?= base_url() ?>home">
            <i class="bi bi-house" style="font-size: 1.5rem;"></i>
            <span>Home</span>
          </a>
        </li>
        <li <?= $menu == 'belajar' ? 'class="active"' : ''; ?>>
          <a href="<?= base_url() ?>belajar">
            <i class="bi bi-play-btn" style="font-size: 1.5rem;"></i>
            <span>Belajar</span>
          </a>
        </li>
        <li <?= $menu == 'news' ? 'class="active"' : ''; ?>>
          <a href="<?= base_url() ?>news">
            <i class="bi bi-newspaper" style="font-size: 1.5rem;"></i>
            <span>News</span>
          </a>
        </li>
        <li <?= $menu == 'refeal' ? 'class="active"' : ''; ?>>
          <a href="<?= base_url() ?>refeal">
            <i class="bi bi-people" style="font-size: 1.5rem;"></i>
            <span>Refeal</span>
          </a>
        </li>
        <li <?= $menu == 'profile' ? 'class="active"' : ''; ?>>
          <a href="<?= base_url() ?>profile">
            <i class="bi bi-person" style="font-size: 1.5rem;"></i>
            <span>Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- All JavaScript Files -->
<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/slideToggle.min.js"></script>
<script src="<?= base_url() ?>assets/js/internet-status.js"></script>
<script src="<?= base_url() ?>assets/js/tiny-slider.js"></script>
<script src="<?= base_url() ?>assets/js/active.js"></script>
<!-- PWA -->
<script src="<?= base_url() ?>assets/js/pwa.js"></script>

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
</script>
<script src="<?= base_url() ?>assets/js/toast.js"></script>
<?php if (file_exists(VIEWPATH . "javascripts/contents/{$content}.js")) : ?>
  <script src="<?= $this->plugin->build_url("javascripts/contents/{$content}.js") ?>" type="text/javascript"></script>
<?php endif; ?>
</body>

</html>