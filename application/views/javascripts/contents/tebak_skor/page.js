$(document).ready(() => {
  $('input').change(function () {
    const element = $(this);
    if (element.val() < 0) {
      element.val(0);
    }
  });

  $("#fmain").submit(function (ev) {
    ev.preventDefault();
    const data = new FormData(this);
    data.append('key', value_key);
    data.append('pertandingan', global_id_pertandingan);
    setBtnLoading('button[type=submit]', 'Submit')
    $.ajax({
      url: api_base_url + 'member/TebakSkor/simpan',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setToast('success', 'primary', 'Sukses', 'Kursi Berhasil disimpan');
        setTimeout(() => {
          $("#team_1").attr('readonly', '');
          $("#team_2").attr('readonly', '');
          $('button[type=submit]').text('Anda sudah menebak.');
          $("button[type=submit]").attr('disabled', '');
        }, 100);
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

  page_render();
  $("#diambil").hide();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/TebakSkor',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      const data = datas.data;
      $("#team_1").val(data.team_1);
      $("#team_2").val(data.team_2);
      if (data.status == 1) {
        $("#team_1").attr('readonly', '');
        $("#team_2").attr('readonly', '');
        $('button[type=submit]').text('Anda sudah menebak.');
        $("button[type=submit]").attr('disabled', '');
      }
    }).fail(($xhr) => {

    })
  }
})