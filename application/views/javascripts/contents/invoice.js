$(function () {
  page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'invoice/rekening',
      data: {
        key: api_key
      }
    }).done((datas) => {
      const ele = $('#container-rekening');
      ele.val('');
      let num = 1;
      datas.data.forEach(e => {
        ele.append(template(e, num));
        num++;
      });
    }).fail(($xhr) => {
    })
  }


  head_render();
  function head_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'invoice',
      data: {
        key: api_key
      }
    }).done((datas) => {
      const data = datas.data;
      $("#biaya_pendaftaran").html(`IDR ${format_rupiah(data.biaya_pendaftaran)}`)
      $("#nama").html(data.nama)
      $("#email").html(data.email)
      $("#whatsapp").html(`<a class="fw-bold text-decoration-none" href="https://api.whatsapp.com/send?phone=${data.no_telepon}">${data.no_telepon}</a>`)
    }).fail(($xhr) => {
    })
  }

  function template(data, num) {
    return `
      <div class="d-flex align-items-center my-2 mb-3">
        <div class="me-3">
          <img src="${api_base_url}../files/icon_bank/${data.icon}" style="width: 55px;" alt="">
        </div>
        <div style="flex:1">
          <input type="text" value="${data.no_rekening}" id="rek_${num}" style="position:fixed; top:-50px" class="no_rek" readonly="">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <span class="no_rek">${data.no_rekening}</span>
            </div>
            <a href="#" class="text-decoration-none" onclick="copy_rekening('rek_${num}')">Salin</a>
          </div>
          <span>
            a/n
            <span class="fw-bold">${data.atas_nama}</span>
          </span>
        </div>
      </div>
    `;
  }
});

function copy_rekening(id) {
  var copyText = document.getElementById(id);
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
}

function format_rupiah(angka, format = 2, prefix) {
  angka = angka != "" ? angka : 0;
  angka = parseFloat(angka);
  const minus = angka < 0 ? "-" : "";
  angka = angka.toString().split('.');
  let suffix = angka[1] ? '.' + angka[1] : '';

  if (format) {
    let str = '';
    for (let i = 0; i <= format; i++) {
      const suffix_1 = suffix[i] ? suffix[i] : '';
      str = `${str}${suffix_1}`;
    }
    suffix = str;
  }

  angka = angka[0];
  if (angka) {
    let number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi)

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : ''
      rupiah += separator + ribuan.join('.')
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah

    // return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '')
    const result = prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    return minus + result + suffix;
  }
  else {
    return 0
  }
}