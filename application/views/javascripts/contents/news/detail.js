$(function () {
  content_render();

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
});