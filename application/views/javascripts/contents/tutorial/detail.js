$(function () {
  materi_render();
  function materi_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/tutorial/get',
      data: {
        key: value_key,
        id: global_id
      }
    }).done((datas) => {
      const materi = datas.data;
      $("#materi_id").val(materi.id);
      $("#materi_nama").text(materi.nama);
      $("#materi_deskripsi").text(materi.keterangan);
      $("#materi_player").html(youtube_embed_html_generate(materi.url));
    }).fail(($xhr) => {
    })
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
});