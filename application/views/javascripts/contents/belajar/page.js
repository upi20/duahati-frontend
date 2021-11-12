$(function () {

  page_render();
  function page_render() {
    const ele = $('#container');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/list_kelas' + (global_tipe == '1' ? '_vip' : ''),
      data: {
        key: value_key
      }
    }).done((datas) => {
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template(e));
      });
    }).fail(($xhr) => {
      ele.append('Kelas Belum Tersedia');
    })
  }
  function template(data) {
    let is_taken = `<a class="btn btn-primary btn-sm" href="<?= base_url() ?>belajar/kelas/${data.id}">Kunjungi Kelas</a>`;
    if (data.taken == 0) {
      is_taken = `<a class="btn btn-info btn-sm" href="<?= base_url() ?>belajar/kelas/${data.id}">Registrasi</a>`;
    }
    return `
      <div class="col-sm-12 col-md-6">
        <div class="card bg-dark rounded-15 shadow-md" style="width: 100%; height: 200px;">
          <img src="${api_base_url}../files/kelas/master/${data.foto}" class="card-img-top rounded-15" alt="${data.nama}" style="opacity: 0.8; height: 200px; object-fit: cover;"><span class="badge bg-danger  position-absolute card-badge">${data.kategori_nama}</span>
          <div class="d-flex p-2 text-center justify-content-center align-items-center position-absolute" style="top: 0px; height: 200px; width: 100%;">
            <div class="d-flex flex-column ">
              <h2 class="text-white fw-bold">${data.nama}</h2>
              <p class="text-white fw-bold">${data.keterangan}</p>
              <div>
                <a class="btn btn-indigo rounded-15 btn-sm px-4" style="font-size:1.05rem" href="<?= base_url() ?>belajar/kelas/${data.id}">Belajar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      `;
  }
});