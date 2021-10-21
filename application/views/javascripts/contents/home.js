$(function () {
  // moment.defineLocale('id', {});
  // base url api

  // page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/home/list_pertandingan',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const data = datas.data;
      $("#home").html('');
      data.forEach((d) => {
        $("#home").append(template(d));
      })
    }).fail(($xhr) => {

    })
  }

  function template(data) {
    const tanggal = moment(data.date, 'YYYY/MM/DD');
    const tanggal_str = tanggal.format('dddd, DD MMMM YYYY');
    const btn_result = data.status == 3 ? `
      <div class="col-12 p-1">
        <a href="<?= base_url() ?>result/${data.id}" class="btn btn-info w-100" type="submit" style="border-radius: 30px;">Result Quiz Berhadiah</a>
      </div>
    `: '';

    return `
    <div class="card shadow-lg">
      <div class="card-header bg-primary d-flex justify-content-between align-items-center py-1">
        <span class="text-white" style="font-size: .85rem;">
          ${tanggal_str}
        </span>
        <div>
          <img src="<?= base_url() ?>assets/img/custom/logo_liga_1.jpeg" alt="" style="max-height: 30px;">
        </div>
      </div>
      <div class="card-body px-0 d-flex justify-content-center align-items-center">
        <div class="d-flex justify-content-evenly  align-items-center w-100">
          <div class="d-flex justify-content-between align-items-end" style="height: 130px;">
            <div class="d-flex flex-column align-items-center">
              <img src="${api_base_url}../files/team/${data.tim_1_foto}" alt="${data.tim_1}" style="max-width: 100px;">
              <span class="text-dark fw-bold small">${data.tim_1}</span>
            </div>
          </div>

          <span class="text-dark">VS</span>

          <div class="d-flex justify-content-between align-items-end" style="height: 130px;">
            <div class="d-flex flex-column align-items-center">
              <img src="${api_base_url}../files/team/${data.tim_2_foto}" alt="${data.tim_2}" style="max-width: 100px;">
              <span class="text-dark fw-bold small">${data.tim_2}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-light text-center text-dark" style="font-size: .85rem;">${data.kick} WIB</div>
    </div>



    <div class="row p-2 my-2 mb-5">
      <div class="col-6 p-1"><a href="<?= base_url() ?>kursi-berhadiah/${data.id}" class="btn btn-primary w-100" style=" border-radius: 25px;">Kursi Berhadiah</a></div>
      <div class="col-6 p-1"><a href="<?= base_url() ?>mot/${data.id}" class="btn btn-primary w-100" style=" border-radius: 25px;">Man of the match</a></div>
      <div class="col-6 p-1"><a href="<?= base_url() ?>tebak-skor/${data.id}" class="btn btn-primary w-100" style=" border-radius: 25px;">Tebak Skor</a></div>
      <div class="col-6 p-1"><a href="<?= base_url() ?>leardboard/${data.id}" class="btn btn-primary w-100" style=" border-radius: 25px;">Cek Pemenang</a></div>
      ${btn_result}
    </div>
    `;
  }

  function tanggal(tgl) {
    moment.defineLocale('id');
    var check = moment(tgl, 'YYYY/MM/DD');
    var month = check.format('M');
    var day = check.format('D');
    var year = check.format('YYYY');
    let hari = '';
    switch (check.format('dd')) {
      case 'Su':
        hari = 'Minggu';
        break;

      case 'Mo':
        hari = 'Senin';
        break;

      case 'Tu':
        hari = 'Selasa';
        break;

      case 'We':
        hari = 'Rabu';
        break;

      case 'Th':
        hari = 'Kamis';
        break;

      case 'Fr':
        hari = 'Jum\'at';
        break;

      case 'Sa':
        hari = 'Sabtu';
        break;
    }


    return hari;
  }
});