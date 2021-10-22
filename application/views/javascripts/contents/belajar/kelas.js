$(function () {

  head_render();
  function head_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/kelas_head',
      data: {
        key: value_key,
        kelas_id: global_kelas_id
      }
    }).done((datas) => {
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
    }).fail(($xhr) => {
    })
  }

  page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/kelas_body_list',
      data: {
        key: value_key,
        kelas_id: global_kelas_id
      }
    }).done((datas) => {
      const ele = $('#container');
      ele.val('');
      let num = 1;
      let current = 1;
      datas.data.forEach(e => {
        ele.append(template(e, num, current));
        current = e.selesai;
        num++;
      });
      console.log(datas);
    }).fail(($xhr) => {
    })
  }
  function template(data, num, current) {
    let selesai = '<i class="bi bi-chevron-right"></i>';
    if (data.selesai != 0) {
      selesai = '<i class="text-success">Selesai</i>';
    }

    let ok = `class="affan-element-item" href="<?= base_url() ?>belajar/detail/${data.id}"`;
    if (current != 1) {
      ok = `class="affan-element-item" style="background-color: #fafafa;"`
    }
    return `<a ${ok} >${num}. ${data.nama}${selesai}</a>`;
  }
});