$(function () {
  // moment.defineLocale('id', {});
  // base url api

  page_render();
  profile_render();
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

  function template(data) {
    return `
      <div>
        <div class="single-hero-slide bg-overlay" style="background-image: url('${api_base_url}../files/home/slider/${data.foto}')">
          <div class="h-100 d-flex align-items-center text-center">
            <div class="container">
              <h3 class="text-white mb-1">${data.nama}</h3>
              <p class="text-white mb-4">${data.keterangan}</p>
            </div>
          </div>
        </div>
      </div>
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
});