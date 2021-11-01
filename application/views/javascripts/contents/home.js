$(function () {
  // moment.defineLocale('id', {});
  // base url api

  page_render_news();
  page_render();
  profile_render();
  function page_render_news() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/list_berita',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const ele = $('#news_con');
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template_news(e));
      });
      initial_slider_news();
    }).fail(($xhr) => {
    })
  }
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/list_slider',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const ele = $('#container-slider');
      ele.val('');
      datas.data.forEach(e => {
        ele.append(template(e));
      });
      initial_slider();
    }).fail(($xhr) => {
    })
  }

  function profile_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/get_mentor',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const data = datas.data;
      $('#mentor_nama').text(data.nama);
      $('#mentor_gambar').attr('src', `${api_base_url}../files/mentor/${data.foto}`);
      $('#mentor_no_whatsapp').attr('href', `https://api.whatsapp.com/send?phone=${data.no_whatsapp}`);
      $('#mentor_periode_aktif').text('1 Oktober - 1 Desember 2021');
    }).fail(($xhr) => {

    })
  }

  function template_news(data) {
    return `
    <div>
      <div class="single-hero-slide bg-img" style="background-image: url('${api_base_url}../files/news/master/${data.foto}'); opacity:1; height:200px">
        <div class="slide-content">
          <div class="bg-light p-2"style="border-radius:8px; opacity: 0.9;">
            <h6 class="text-dark">${String(data.judul).substring(0, 75) + (String(data.judul).length > 75 ? '...' : '')}</h6 >
          </div >
          <div style="position: absolute; bottom:30px;">
          <a class="btn btn-creative btn-indigo rounded-15" href="<?= base_url()?>news/detail/${data.id}">Read More</a>
          </div>
        </div >
      </div >
    </div >
    `;
  }
  function template(data) {
    return `
    < div >
    <div class="single-hero-slide bg-overlay" style="background-image: url('${api_base_url}../files/home/slider/${data.foto}')">
      <div class="h-100 d-flex align-items-center text-center">
        <div class="container">
          <h6 class="text-white mb-1 fw-bold">${data.nama}</h6>
          <p class="text-white mb-4">${data.keterangan}</p>
        </div>
      </div>
    </div>
      </div >
    `;
  }

  function initial_slider() {
    if (document.querySelectorAll('.tiny-slider-one-wrapper').length > 0) {
      var slider = tns({
        container: ".tiny-slider-one",
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 1000,
        mouseDrag: true,
        controlsText: [('<i class="bi bi-chevron-left"></i>'), ('<i class="bi bi-chevron-right"></i>')]
      });
    }
  }

  function initial_slider_news() {
    if (document.querySelectorAll('.tiny-slider-three-wrapper').length > 0) {
      var tinySliderThree = tns({
        container: '.tiny-slider-three',
        items: 1,
        gutter: 10,
        center: true,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 1000,
        mouseDrag: true,
        controls: false,
        nav: false,
        edgePadding: 40
      });
    }
  }
});