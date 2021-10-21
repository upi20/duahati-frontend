$(function () {
  setTimeout(() => {
    $("#password").val('');
  }, 500)
  profile_info();
  function profile_info() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'profile/info',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const data = datas.data;
      $("#nama").val(data.nama);
      $("#telepon").val(data.telepon);
      $("#email").val(data.email);
      $("#since").text(data.since_str);
      $("#p_nama").text(data.nama);
      $("#p_telepon").text(data.telepon);

      $("#header_profile_name").text(data.nama);
      localStorage.setItem('email', data.email);
      localStorage.setItem('nama', data.nama);
      $("#img-profile").attr('src', `${api_base_url}../files/member/profiles/${data.foto}`);
    }).fail(($xhr) => {

    })
  }

  $("#btn-logout").click(() => {
    localStorage.removeItem('key');
    localStorage.removeItem('id');
    localStorage.removeItem('email');
    localStorage.removeItem('nama');
    localStorage.removeItem('level');
    setTimeout(() => {
      window.location = "<?= base_url() ?>login";
    }, 200);
  })

  $("#fmain").submit(function (ev) {
    ev.preventDefault();

    const password = $("#password");
    const password1 = $("#password1");
    if (password.val() != '') {
      if (password.val().length < 6) {
        setToast('danger', 'danger', 'Failed', "Password minimal 6 huruf");
        password.focus();
        return
      }

      if (password.val() != password1.val()) {
        setToast('danger', 'danger', 'Failed', "Ulangi password tidak sama.");
        password1.focus();
        return
      }
    }

    const data = new FormData(this);
    data.append('key', value_key);
    setBtnLoading('button[type=submit]', 'Submit')
    $.ajax({
      url: api_base_url + 'profile/update',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setToast('success', 'primary', 'Sukses', 'Profile Berhasil Diubah');
        $("#header_profile_name").text($('#nama').val());
        localStorage.setItem('nama', $('#nama').val());
        localStorage.setItem('email', $('#email').val());
        if (data.data.foto != null) {
          $("#img-profile").attr('src', `${api_base_url}../files/member/profiles/${data.data.foto}`);
        }
      },
      error: function ($xhr) {
        if (!$xhr.responseText) {
          setToast('danger', 'danger', 'Failed', "Mohon periksa koneksi anda.");
          return;
        }
        const response = JSON.parse($xhr.responseText);
        setToast('danger', 'danger', 'Failed', response.message);
      },
      complete: function () {
        setBtnLoading('button[type=submit]', 'Submit', false);
      }
    });

  })
});