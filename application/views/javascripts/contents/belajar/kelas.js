$(function () {

  head_render();
  function head_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/kelas_head',
      data: {
        key: value_key,
        kelas_id: global_kelas_id
      },
      success: (datas) => {
        const data = datas.data;
        const kelas = datas.data.kelas;
        const mentor = datas.data.mentor;
        $("#kelas_foto").attr('src', `${api_base_url}../files/kelas/master/${kelas.foto}`);
        $(".kelas_nama").text(kelas.nama);
        $("#kelas_kategori").text(kelas.kategori_nama);
        // $("#kelas_counter_nilai").text(data.total);
        let persentase = Number(data.selesai) * (100 / Number(data.total));
        persentase = Math.floor(persentase);

        $("#kelas_counter_nilai").text(persentase);
        const progres = $('#kelas_counter_bar');
        progres.attr('style', `width: ${persentase}%`)
        progres.attr('aria-valuenow', `width: ${persentase}%`)


        $("#kelas_keterangan").text(kelas.keterangan);
        // $("#kelas_expire").text('10 Desember 2021 (20 Hari Lagi)');
        $('#mentor_no_whatsapp').attr('href', `https://api.whatsapp.com/send?phone=${mentor.no_whatsapp}`);
      },
      error: ($xhr) => {
        console.log($xhr);
      }
    });
  }

  page_render();
  function page_render() {
    const ele = $('#container');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/kelas_body_list',
      data: {
        key: value_key,
        kelas_id: global_kelas_id
      }
    }).done((datas) => {
      ele.val('');
      let num = 1;
      let current = 1;
      datas.data.forEach(e => {
        ele.append(template(e, num, current));
        current = e.selesai;
      });
      console.log(datas);
    }).fail(($xhr) => {
      ele.append('Materi Belum Tersedia');
      $("#kelas_counter_nilai").text(0);
    })
  }
  function template(data, num, current) {
    let selesai = '';
    if (data.selesai != 0) {
      selesai = '<i class="text-success">Selesai</i>';
    }

    let ok = `href="<?= base_url() ?>belajar/detail/${data.id}/${data.kelas_id}"`;
    let link = ok;
    if (current != 1) {
      ok = `class="btn btn-secondary"`
      link = '';
    } else {
      ok += ' class="btn btn-indigo"';
    }

    return `
    <div class="col-sm-12 col-md-6">
      <div class="card shadow-sm rounded-15" style="width: 100%">
        <img src="http://img.youtube.com/vi/${youtube_parser(data.url)}/mqdefault.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <a ${link} class="card-title h5 text-decoration-none text-dark">${num}. ${data.nama}</a>
          <p class="card-text">${data.keterangan}</p>
          <div class="d-flex justify-content-between flex-row-reverse  align-items-center">
          <a ${ok} class="btn btn-indigo">Buka</a>
          ${selesai}
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