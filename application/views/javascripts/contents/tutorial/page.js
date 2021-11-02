$(function () {
  page_render();
  function page_render() {
    const ele = $('#container');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/tutorial',
      data: {
        key: value_key
      }
    }).done((datas) => {
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template(e));
      });
    }).fail(($xhr) => {
      ele.append('Materi Belum Tersedia');
      $("#kelas_counter_nilai").text(0);
    })
  }
  function template(data) {
    return `
    <div class="col-sm-12 col-md-6">
      <div class="card shadow-sm rounded-15" style="width: 100%">
        <img src="${api_base_url}../files/tutorial/${data.foto}" onerror="this.src='http://img.youtube.com/vi/${youtube_parser(data.url)}/mqdefault.jpg'" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="<?= base_url() ?>tutorial/detail/1" class="card-title h5 text-decoration-none text-dark">${data.nama}</a>
          <div class="d-flex justify-content-between flex-row-reverse  align-items-center">
            <a href="<?= base_url() ?>tutorial/detail/${data.id}" class="btn btn-indigo">Buka</a>
          </div>
        </div>
      </div>
    </div>
    `;
  }
});

function youtube_parser(url) {
  var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
  var match = url.match(regExp);
  return (match && match[1].length == 11) ? match[1] : false;
}