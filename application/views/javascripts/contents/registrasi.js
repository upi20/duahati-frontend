$(document).ready(function () {
  let value_key = localStorage.getItem('key')
  cekAuth()
  function cekAuth() {
    if (value_key != null) {
      window.location = '<?= base_url() ?>home';
    }
  }
  $('#fmain').submit(function (ev) {
    ev.preventDefault();
    // validasi
    const password = $("#password");
    const password_repeat = $("#password_repeat");

    if (password.val().length < 6) {
      setToast({
        fill: "Password minimal 6 huruf",
        background: "bg-danger"
      })
      password.focus();
      return
    }

    if (password.val() != password_repeat.val()) {
      setToast({
        fill: "Ulangi password tidak sama.",
        background: "bg-danger"
      })
      password_repeat.focus();
      return
    }

    const email = $("#email").val();
    const nama = $("#nama").val();
    const telepon = $("#telepon").val();


    setBtnLoading('#btn-submit', 'Submit')
    $.ajax({
      url: api_base_url + 'login/registrasi',
      cache: false,
      contentType: false,
      processData: false,
      data: new FormData(this),
      type: 'post',
      success: function (data) {
        setToast({
          fill: "Registrasi Berhasil",
          background: "bg-primary"
        })
        setTimeout(() => {
          window.location = `<?= base_url() ?>registrasi/invoice?token=${data.data.token}&email=${email}&nama=${nama}&telepon=${encodeURIComponent(telepon)}`;
        }, 500);
      },
      error: function ($xhr) {

        if (!$xhr.responseText) {
          setToast({
            fill: "Mohon periksa koneksi anda.",
            background: "bg-danger"
          })
          return;
        }

        if ($xhr.status == 500) {
          setToast({
            fill: "Sedang terjadi pemeliharaan sistem silahkan coba beberapa saat lagi. Terima kasih",
            background: "bg-danger"
          })
          return;
        }

        if ($xhr.status == 409) {
          setToast({
            fill: "Email sudah digunakan.",
            background: "bg-danger"
          })
          return;
        }

        const response = JSON.parse($xhr.responseText);
        setToast({
          fill: response.message,
          background: "bg-danger"
        })
      },
      complete: function () {
        setBtnLoading('#btn-submit', 'Submit', false);
      }
    });
  })
})

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

function setToast({
  fill = '',
  background = 'bg-primary'
}) {
  const toastId = '#liveToast';
  $(toastId).removeClass(toast_last_background);
  $(toastId).addClass(background);
  $(toastId).html(fill);
  toast_last_background = background;
  (new bootstrap.Toast(document.querySelector('#liveToast')).show());
}