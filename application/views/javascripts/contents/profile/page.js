$(function () {
  function init_select2() {

    $('#alamat_provinsi').select2({
      ajax: {
        method: 'post',
        url: api_base_url + 'alamat/provinsi',
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term,
          };
        },
        processResults: function (data) {
          return {
            results: data.results
          };
        }
      }
    });

    $('#alamat_kabupaten_kota').select2({
      ajax: {
        method: 'post',
        url: api_base_url + 'alamat/kabupaten_kota',
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term,
            id_provinsi: $("#alamat_provinsi").val()
          };
        },
        processResults: function (data) {
          return {
            results: data.results
          };
        }
      }
    });

    $('#alamat_kecamatan').select2({
      ajax: {
        method: 'post',
        url: api_base_url + 'alamat/kecamatan',
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term,
            id_kabupaten_kota: $("#alamat_kabupaten_kota").val()
          };
        },
        processResults: function (data) {
          return {
            results: data.results
          };
        }
      }
    });

    $('#alamat_desa_kelurahan').select2({
      ajax: {
        method: 'post',
        url: api_base_url + 'alamat/desa_kelurahan',
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term,
            id_kecamatan: $("#alamat_kecamatan").val()
          };
        },
        processResults: function (data) {
          return {
            results: data.results
          };
        }
      }
    });
  }


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
      $("#img-profile").attr('src', `${api_base_url}../files/member/${data.foto}`);

      // revisi v2
      // nama panggilan
      $("#nama_panggilan").val(data.nama_panggilan);

      // jenis kelamin
      $("#jenis_kelamin").val(data.jenis_kelamin);

      // status
      $("#status").val(data.menikah);

      // status
      $("#tanggal_lahir").val(data.tanggal_lahir);

      // alamat lainnya
      $("#detail_lainnya").val(data.detail_lainnya);

      // alamat
      template_alamat($('#alamat_provinsi'), {
        id: data.id_provinsi,
        text: data.nama_provinsi
      });

      template_alamat($('#alamat_kabupaten_kota'), {
        id: data.id_kabupaten_kota,
        text: data.nama_kabupaten_kota
      });

      template_alamat($('#alamat_kecamatan'), {
        id: data.id_kecamatan,
        text: data.nama_kecamatan
      });

      template_alamat($('#alamat_desa_kelurahan'), {
        id: data.id_desa_kelurahan,
        text: data.nama_desa_kelurahan
      });

      init_select2();

    }).fail(($xhr) => {

    })
  }

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
        localStorage.setItem('foto', data.data.foto);
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

  function template_alamat(ele, data) {
    if (data.id != null) {
      $(ele).append(`<option selected value="${data.id}">${data.text}</option>`);
    }
  }
});