$(function () {
  content_render();
  coment_render();
  function content_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/berita',
      data: {
        key: value_key,
        id: news_id
      }
    }).done((datas) => {
      const data = datas.data;
      $('#title').text(data.judul);
      $('#deskripsi').html(data.deskripsi);
      $('#foto').attr('src', `${api_base_url}../files/news/master/${data.foto}`);
    }).fail(($xhr) => {

    })
  }

  function coment_render() {
    const ele = $('#list_comment');
    ele.html('<p class="text-center fw-bold">Loading...</p>');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/berita_komentar',
      data: {
        key: value_key,
        id: news_id
      }
    }).done((datas) => {
      $("#container_comment").fadeIn();
      const ele = $('#list_comment');
      ele.html('');
      datas.data.forEach(e => {
        ele.append(template(e));
      });

    }).fail(($xhr) => {
      $("#container_comment").fadeOut();
    })
  }

  $("#fcomment").submit(function (ev) {
    ev.preventDefault();
    const data = new FormData(this);
    data.append('key', value_key);
    data.append('id', news_id);
    setBtnLoading('button[type=submit]', 'Submit')
    $.ajax({
      url: api_base_url + 'member/home/berita_comment',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        coment_render();
        $('[name=comment]').val('');
        setToast('success', 'primary', 'Sukses', 'Komentar Berhasil Disimpan');
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
        setBtnLoading('button[type=submit]', 'Submit', false);
      }
    });
  })
});

function template(data) {
  return `
    <li class="single-user-review d-flex">
      <div class="user-thumbnail mt-0"><img src="<?= base_url() ?>${api_base_url}../files/member/profiles/${data.foto_member}" alt="" onerror="this.src='<?= base_url() ?>assets/img/custom/pp.png'"></div>
      <div class="rating-comment">
        <p class="comment mb-1 fw-bold">${data.nama_member}</p>
        <p class="comment mb-1">${data.komentar}</p>
        <span class="name-date">${data.created_at}</span>
      </div>
    </li>
  `;
}