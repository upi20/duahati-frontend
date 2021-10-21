$(document).ready(() => {
  // setAds(youtube_embed_html_generate('https://www.youtube.com/watch?v=JdSpuTi9d8A&list=RDMMG1BcXol14u8&index=2'));
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
      url: api_base_url + 'member/Leardboard',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      const data = datas.data;
      const kursi = $('#kursi');
      kursi.html('');
      kursi.html(template(data.kursi));

      const mot = $('#mot');
      mot.html('');
      mot.html(template(data.mot));

      const score = $('#score');
      score.html('');
      score.html(template(data.score));

    }).fail(($xhr) => {

    })

    // ajax iklan
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/ads',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      const data = datas.data;
      // cek jenis iklan

      // gambar
      if (data.jenis == 1) {
        setAds(`<img src="${api_base_url}../files/iklan/${data.gambar}" alt="${data.nama}">`);
      }
      // video
      else if (data.jenis == 2) {
        setAds(youtube_embed_html_generate(data.url));
      }
    }).fail(($xhr) => {

    })
  }

  function template(data) {
    let return_html = '';
    data.forEach(e => {
      return_html += `<li><span>#${e.menang}</span> ${e.nama}</li>`;
    });

    return return_html;
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
      src="https://www.youtube.com/embed/${id}?autoplay=1&fs=1&iv_load_policy=&showinfo=0&rel=0&cc_load_policy=0&start=0&modestbranding&end=0&controls=0"></iframe>`
  }
})

function youtube_parser(url) {
  var regExp = /^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"']*)/i;
  var match = url.match(regExp);
  return (match && match[1].length == 11) ? match[1] : false;
}

