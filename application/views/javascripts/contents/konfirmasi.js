$(function () {
  let current_toast_bg = '';
  function setToast(props) {
    $('#alert_con').fadeIn();
    $('#alert_fill').html(props.fill);
    $('#alert_sub_con').removeClass(current_toast_bg);
    $('#alert_sub_con').addClass(props.background);
    current_toast_bg = props.background;
  }
  page_render();
  function page_render() {
    $.ajax({
      method: 'post',
      url: api_base_url + 'konfirmasi',
      data: { token: token }
    }).done((datas) => {
      const data = datas.data;
      $("#id_member").val(data.id)
      $("#nama").val(data.nama)
      $("#email").val(data.email)
      $("#telepon").val(data.no_telepon)
      $("#nominal").val(data.biaya_pendaftaran)
    }).fail(($xhr) => {
    })
  }
  $("#fmain").submit(function (ev) {
    ev.preventDefault();
    setBtnLoading('button[type=submit]', 'Konfirmasi');
    const data = new FormData(this);
    $.ajax({
      url: api_base_url + 'konfirmasi/send',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setToast({
          fill: "Data Berhasil Disimpan",
          background: "alert-primary"
        })
        setTimeout(() => {
          window.location = "<?= base_url() ?>login?konfirmasi=1";
        }, 300);
      },
      error: function ($xhr) {
        if (!$xhr.responseText) {
          setToast({
            fill: "Mohon periksa koneksi anda.",
            background: "alert-danger"
          })
          return;
        }
        const response = JSON.parse($xhr.responseText);
        setToast({
          fill: response.message,
          background: "alert-danger"
        })
      },
      complete: function () {
        setBtnLoading('button[type=submit]', 'Konfirmasi', false);
      }
    });

  })

});

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