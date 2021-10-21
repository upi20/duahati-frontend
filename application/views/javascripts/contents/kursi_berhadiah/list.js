$(function () {
  // moment.defineLocale('id', {});
  // base url api

  page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kursi/list_kursi',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      const data = datas.data;
      $("#body").html('');
      data.forEach((d) => {
        $("#body").append(template(d));
      })
    }).fail(($xhr) => {

    })
  }

  function template(data) {
    let title = 'Pilih Kursi';
    let selected = '';
    let shadow = 'shadow-lg';
    if (data.is_taken == 1) {
      title = 'Lihat Kursi';
    }

    if (data.taken == 1) {
      title = 'Terdaftar';
      selected = 'border border-primary';
    }

    if (data.is_taken == 1 && data.taken == 0) {
      shadow = 'shadow-sm';
    }
    return ` <div class="card ${shadow} p-0 mb-3 ${selected}" style="border-radius: 20px;">
              <div class="d-flex align-items-center" style="width: 100%;">
                <div class="card-blog-img position-relative bg-primary" style="border-radius: 20px 0 0 20px; max-width: 150px; min-height: 100px; height: auto; ">
                  <div class="d-flex justify-content-between align-items-center" style="height: 125px">
                    <div></div>
                    <div class="d-flex flex-column align-items-center">
                      <h3 class="h5 text-white fw-bold mb-1 text-center mx-2">${data.nama}</h3>
                      <small class="muted text-white">Tersedia ${data.kursi} kursi</small>
                    </div>
                    <div></div>
                  </div>
                </div>
                <div class="ms-3" style="width: auto;">
                  <h3 class="h5 text-primary">${title}</h3>
                  <a class="btn btn-primary btn-sm px-3" style="border-radius: 15px;" href="<?= base_url() ?>kursiBerhadiah/detail/${global_id_pertandingan}/${data.id}">Klik disini</a>
                </div>
              </div>
            </div>`;
  }
});