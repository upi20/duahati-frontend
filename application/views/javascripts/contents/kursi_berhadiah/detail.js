$(function () {
  let is_taken = false;
  page_render();
  $("#diambil").hide();
  function page_render() {
    $("#input").html('Loading');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kursi/list_kursi_detail',
      data: {
        key: value_key,
        id_pertandingan: global_id_pertandingan,
        id_kategori: global_id_kategori
      }
    }).done((datas) => {
      $("#input").html('');
      const data = datas.data;
      data.forEach((d) => {
        $("#input").append(template(d));
      })
      $('input[name=kursi]').change(function () {
        switch_select(this.value);

        // mode langsung
        save_choise(this.value);
      })
    }).fail(($xhr) => {

    })
  }

  function template(data) {
    let color = data.available ? 'primary' : 'light';
    color = data.taken == 1 ? 'info' : color;
    if (data.is_taken == 1) {
      is_taken = true;
      $("#container-submit").html('');
    }
    if (data.taken == 1) {
      setTimeout(() => {
        $("#diambil").fadeIn();
      }, 100);
    }

    return `<div class="col-3 col-md-3 col-lg-2 p-0">
    <input style="display:none" type="radio" name="kursi" id="kursi${data.id}" value="${data.id}" ${data.available ? 'disabled' : ''}>
    <label class="shadow-sm bg-${color} p-2 m-2 text-${data.available ? 'white' : 'dark'} h5 text-uppercase border" style="border-radius: 25px;"
      for="kursi${data.id}">
      <div class="d-flex align-items-center " style="min-height:50px; min-width:50px">
        <span style="width: 100%;">
          ${data.name}
        </span>
      </div>
    </label>
  </div>`;
  }


  function switch_select(target) {
    if (is_taken) {
      return;
    }
    $('input[name=kursi]').each(function () {
      if (!this.disabled) {
        const ele = $(this);
        const label = $(`label[for=${this.id}]`);
        if (ele.val() == target) {
          label.addClass('bg-info')
          label.addClass('text-white')
          label.removeClass('bg-light')
          label.removeClass('text-dark')
        } else {
          label.addClass('bg-light')
          label.addClass('text-dark')
          label.removeClass('bg-info')
        }
      }
    })
  }

  $("#fmain").submit(function (ev) {
    ev.preventDefault();
    const data = new FormData(this);
    $('input[name=kursi]').attr('readonly', '')
    data.append('key', value_key);
    data.append('pertandingan', global_id_pertandingan);
    data.append('kategori', global_id_kategori);
    setBtnLoading('button[type=submit]', 'Submit')
    $.ajax({
      url: api_base_url + 'member/kursi/simpan',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setToast('success', 'primary', 'Sukses', 'Kursi Berhasil dipilih');
        is_taken = true;
        $("#container-submit").html('');
        setTimeout(() => {
          $("#diambil").fadeIn();
          page_render();
        }, 100);
      },
      error: function ($xhr) {
        if (!$xhr.responseText) {
          setToast('danger', 'danger', 'Failed', "Mohon periksa koneksi anda.");
          return;
        }
        const response = JSON.parse($xhr.responseText);
        setToast('danger', 'danger', 'Failed', response.message);
        page_render();
      },
      complete: function () {
        setBtnLoading('button[type=submit]', 'Submit', false);
      }
    });

  })

  // mode langsung
  $("#container-submit").html('');
  function save_choise(target) {
    if (!is_taken) {
      $("#fmain").submit();
    }
  }
});