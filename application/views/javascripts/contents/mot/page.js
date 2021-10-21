$(document).ready(() => {
  $('input').change(function () {
    const element = $(this);
    if (element.val() < 0) {
      element.val(0);
    }
  });

  $("#btn-vote").click(function (ev) {

    const data = new FormData();
    data.append('key', value_key);
    data.append('pertandingan', global_id_pertandingan);
    data.append('id_pemain', $("#id_pemain").val());

    setBtnLoading('btn-vote', 'Submit')
    $.ajax({
      url: api_base_url + 'member/Mot/simpan',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setToast('success', 'primary', 'Sukses', 'Berhasil disimpan');
        page_render();
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
        setBtnLoading('btn-vote', 'Submit', false);
      }
    });
  })

  page_render();
  function page_render() {
    const body_element = $("#body");
    body_element.html('<span class="text-center">Loading</span>');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/Mot',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      body_element.html('');
      datas.data.forEach((data) => {
        body_element.append(template(data));
      })
    }).fail(($xhr) => {

    })
  }

  function template(data) {
    let button = ``;
    if (data.is_taken == 0) {
      button = `<button class="btn btn-primary btn-sm my-2" style="border-radius: 30px;" data-id="${data.id}" data-nama="${data.nama}" onclick="vote(this)">Pilih</button>`;
    }

    if (data.taken == 1) {
      button = `<button class="btn btn-info btn-sm my-2" style="border-radius: 30px;">Sudah Dipilih</button>`;
    }
    return `
      <div class="d-flex align-items-center mb-4">
        <div class="user-profile me-3" style="overflow: hidden;">
          <img style="margin: auto; min-width: 85px;" onerror="this.src='<?= base_url() ?>assets/img/custom/men.png'" src="${api_base_url}../files/pemain/${data.foto}" alt="Mentor"></i>
        </div>
        <div class="user-info d-flex flex-column align-items-start">
          <h3 class="mb-1 text-primary">${data.nama}</h3>
          ${button}
          <small class="mt-1">${data.vote} Vote</small>
        </div>
      </div>
    `;
  }
})

function vote(datas) {
  const data = datas.dataset;
  $("#logoutModal").modal('toggle');
  $("#nama-pemain").text(data.nama);
  $("#id_pemain").val(data.id);
}