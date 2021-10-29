$(function () {
  page_render_news();
  function page_render_news() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/list_berita_full',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const ele = $('#container');
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template_news(e));
      });
    }).fail(($xhr) => {
    })
  }

  function template_news(data) {
    return `
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card position-relative shadow-sm rounded-15">
      <img class="card-img-top" style="border-radius: 15px 15px 0 0;" src="${api_base_url}../files/news/master/${data.foto}" alt="">
      <!--
      <span class="badge bg-warning text-dark position-absolute card-badge">Business</span>
      <div class="card-body"><span class="badge bg-danger rounded-pill mb-2 d-inline-block">16 Dec</span>
      </div>
      -->
      <div class="p-2">
        <a class="blog-title d-block mb-3 text-dark" href="<?= base_url()?>news/detail/${data.id}">
        ${data.judul}
        </a><a class="btn btn-primary btn-sm" href="<?= base_url()?>news/detail/${data.id}">Read More</a>
      </div>
    </div>
    `;
  }
});