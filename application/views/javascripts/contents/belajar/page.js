$(function () {
  // moment.defineLocale('id', {});
  // base url api

  page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/list_kelas',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const ele = $('#container');
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template(e));
      });
      console.log(datas);
    }).fail(($xhr) => {
    })
  }
  function template(data) {
    return `
    <div class="col-12 col-md-8 col-lg-7 col-xl-6">
      <div class="card shadow-sm blog-list-card">
        <div class="d-flex align-items-center">
          <div class="card-blog-img position-relative" style="background-image: url('${api_base_url}../files/kelas/master/${data.foto}')"><span class="badge bg-success  position-absolute card-badge">${data.kategori_nama}</span></div>
          <div class="card-blog-content p-3">
            <a class="blog-title mb-3 text-dark" href="<?= base_url() ?>belajar/kelas">${data.nama}</a>
            <p>${data.keterangan}</p>
            <a class="btn btn-primary btn-sm" href="<?= base_url() ?>belajar/kelas/${data.id}">Kunjungi Kelas</a>
          </div>
        </div>
      </div>`;
  }
});