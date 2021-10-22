$(function () {

  mentor_render();
  function mentor_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/get_mentor',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const data = datas.data;
      $('#mentor_no_whatsapp').attr('href', `https://api.whatsapp.com/send?phone=${data.no_whatsapp}`);
    }).fail(($xhr) => {
    })
  }

  materi_render();
  function materi_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/get_materi',
      data: {
        key: value_key,
        materi_id: global_materi_id
      }
    }).done((datas) => {
      const materi = datas.data.materi;
      const tonton = datas.data.tonton;
      $("#materi_id").val(materi.id);
      $("#kelas_id").val(materi.kelas_id);
      $("#materi_nama").text(materi.nama);
      $("#materi_deskripsi").text(materi.keterangan);
      $("#materi_player").html(youtube_embed_html_generate(materi.url));
      $("#sebelumnya").html(materi.sebelumnya != null ? `
      <a href="<?= base_url()?>belajar/detail/${materi.sebelumnya}" class="btn btn-secondary"><i class="bi bi-chevron-left"></i> Sebelumnya</a>
      `: '')
      $("#selanjutnya").html(materi.selanjutnya != null ? `
      <a href="<?= base_url()?>belajar/detail/${materi.selanjutnya}" id="btn_selanjutnya" class="btn btn-info">Berikutanya <i class="bi bi-chevron-right"></i></a>
      `: '')

      $("#btn_selanjutnya").click(function (e) {
        if ($('#tonton_id').val() == '0') {
          setToast('danger', 'danger', 'Failed', "Feedback belum diberikan.");
          e.preventDefault();
          return false;
        }
      })

      if (tonton != null) {
        setFill('materi', tonton.materi_feedback_nilai);
        setFill('mentor', tonton.mentor_feedback_nilai);
        $("#tonton_id").val(tonton.id);
        $("#keterangan_materi").val(tonton.materi_feedback_keterangan);
        $("#keterangan_mentor").val(tonton.mentor_feedback_keterangan);
      }
    }).fail(($xhr) => {
    })
  }

  // head_render();
  function head_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/kelas_head',
      data: {
        key: value_key,
        materi_id: global_materi_id
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
      $("#kelas_expire").text('10 Desember 2021 (20 Hari Lagi)');
      $('#mentor_no_whatsapp').attr('href', `https://api.whatsapp.com/send?phone=${mentor.no_whatsapp}`);
    }).fail(($xhr) => {
    })
  }

  // page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/kelas/kelas_body_list',
      data: {
        key: value_key,
        materi_id: global_materi_id
      }
    }).done((datas) => {
      const ele = $('#container');
      ele.val('');
      let num = 1;
      datas.data.forEach(e => {
        ele.append(template(e, num));
        num++;
      });
      console.log(datas);
    }).fail(($xhr) => {
    })
  }

  function template(data, num) {
    let selesai = '<i class="bi bi-chevron-right"></i>';
    if (data.selesai != 0) {
      selesai = '<i class="text-success">Selesai</i>';
    }
    return `<a class="affan-element-item" href="<?= base_url() ?>belajar/detail/${data.id}">${num}. ${data.nama}${selesai}</a>`;
  }

  function youtube_embed_html_generate(url) {
    const id = youtube_parser(url);
    return `<iframe
      frameborder="0"
      scrolling="no"
      marginheight="0"
      marginwidth="0"
      width="100%"
      height="500px"
      type="text/html"
      allow="autoplay; fullscreen"
      src="https://www.youtube.com/embed/${id}?autoplay=1&fs=1&iv_load_policy=&showinfo=1&rel=0&cc_load_policy=1&start=0&modestbranding&end=0&controls=1"></iframe>`
  }

  function youtube_parser(url) {
    var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
    var match = url.match(regExp);
    return (match && match[1].length == 11) ? match[1] : false;
  }

  $('.mentor').change(() => {
    resetFill('mentor');
  })

  $('.materi').change(() => {
    resetFill('materi');
  })

  $('#ffeedback').submit(function (ev) {
    ev.preventDefault();
    if (getFill('mentor') < 1) {
      setToast('danger', 'danger', 'Failed', "Rating mentor belum di-isi");
      return;
    }
    if (getFill('materi') < 1) {
      setToast('danger', 'danger', 'Failed', "Rating materi belum di-isi");
      return;
    }

    // validasi
    setBtnLoading('[type=submit]', 'Tandai Selesai Dan Kirim Feedback')
    const data = new FormData(this);
    data.append('key', value_key);
    $.ajax({
      url: api_base_url + 'member/kelas/feedback',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setToast('success', 'primary', 'Sukses', "Feedback Dikirim");
        $('#tonton_id').val(data.id);
      },
      error: function ($xhr) {
        setBtnLoading('[type=submit]', '<i class="bi bi-check2-square"></i> Tandai Selesai Dan Kirim Feedback', false);
        if (!$xhr.responseText) {
          setToast('danger', 'danger', 'Failed', "Mohon periksa koneksi anda.");
          return;
        }
        const response = JSON.parse($xhr.responseText);
        setToast('danger', 'danger', 'Failed', response.message);
      },
      complete: function () {
        setBtnLoading('[type=submit]', '<i class="bi bi-check2-square"></i> Tandai Selesai Dan Kirim Feedback', false);
      }
    });
  })
});

// getter

function getFill(name) {
  let result = 0;
  $(`[name=nilai_${name}]`).each(function (e) {
    if (this.checked) {
      result = this.value;
    }
  })
  return Number(result);
}

// seter
function setFill(name, nilai) {
  for (let i = 1; i <= 5; i++) {
    const ele = $(`[for=${name}_nilai_${i}]`);
    if (i <= nilai) {
      ele.find('.star-icon').attr('style', 'fill:#f1b10f');
    } else {
      ele.find('.star-icon').attr('style', 'fill:#fff');
    }
  }
  $(`[name=nilai_${name}]`).each(function (e) {
    if (this.value == nilai) {
      this.checked = true;
    }
  })
}

// reset
function resetFill(name) {
  $(`.${name}`).each(function () {
    const id = this.id;
    $(`[for=${id}]`).find('.star-icon').removeAttr('style');
  })
}