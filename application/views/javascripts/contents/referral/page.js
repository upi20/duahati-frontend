$(document).ready(function () {
  $('#example').DataTable({
    "scrollX": true
  });

  function profile_info() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/referral/profile',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const data = datas.data;
      $("#nama").html(data.nama);
      $("#kode_referral").html(`Kode Referral: <span class="fw-bold">${data.kode_referral}</span>`);
      const pengundang = data.pengundang == null ? '' : `<span style="margin-right:10px;">Diundang</span> <a href="#">data.pengundang </a>`;
      $("#pengundang").html(data.pengundang);

      $("#img-profile").attr('src', `${api_base_url}../files/member/${data.foto}`);
    }).fail(($xhr) => {

    })
  }

  function reward_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/referral/reward',
      data: {
        key: value_key
      }
    }).done((datas) => {
      const data = datas.data;
      $("#pencairan_total").html(`Total Pendapatan:  <span class="fw-bold">Rp. ${format_rupiah(data.total_pendapatan)}</span>`);
      $("#pencairan_dicairkan").html(`Sudah Dicairkan:  <span class="fw-bold">Rp. ${format_rupiah(data.dicairkan)}</span>`);
      $("#pencairan_belum_dicairkan").html(`Belum Dicairkan:  <span class="fw-bold">Rp. ${format_rupiah(data.belum_dicairkan)}</span>`);
    }).fail(($xhr) => {

    })
  }

  function tabel_pencairan() {
    const table_html = $('#tbl_pencairan');
    table_html.dataTable().fnDestroy()
    const new_table = table_html.DataTable({
      "ajax": {
        "url": api_base_url + 'member/referral/riwayat_pencairan',
        "data": {
          key: value_key
        },
        "type": 'POST'
      },
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "lengthChange": true,
      "scrollX": true,
      "autoWidth": false,
      "columns": [
        { "data": null },
        { "data": "tanggal" },
        {
          "data": "jumlah_dana", render(data, type, full, meta) {
            return `Rp. ${format_rupiah(data)}`;
          }, className: 'text-end'
        },
        {
          "data": "status",
          render(data, type, full, meta) {
            let color = 'success';
            color = data == 0 ? 'warning' : color;
            color = data == 1 ? 'success' : color;
            color = data == 2 ? 'danger' : color;
            return `<span class="text-${color} font-weight-bold">${full.status_str}</span>`;
          }
        },
        {
          "data": "id", render(data, type, full, meta) {
            return `<div class="pull-right">
              <button class="btn btn-info btn-sm"
                                data-id="${full.id}"
                                data-kelas_id="${full.kelas_id}"
                                data-status="${full.status}"
                                data-bs-toggle="modal"
                                data-bs-target="#modal_detail"
                                onclick="Ubah(this)">
                                <i class="bi bi-eye"></i>
              </button>
            </div > `
          }, className: "nowrap"
        }
      ],
      order: [
        [1, 'asc']
      ],
      columnDefs: [{
        orderable: false,
        targets: [0, 4]
      }],
    });
    new_table.on('draw.dt', function () {
      var PageInfo = table_html.DataTable().page.info();
      new_table.column(0, {
        page: 'current'
      }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1 + PageInfo.start;
      });
    });
  }

  function tabel_undang() {
    const table_html = $('#tbl_undang');
    table_html.dataTable().fnDestroy()
    const new_table = table_html.DataTable({
      "ajax": {
        "url": api_base_url + 'member/referral/mengundang',
        "data": {
          key: value_key
        },
        "type": 'POST'
      },
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "scrollX": true,
      "lengthChange": true,
      "autoWidth": false,
      "columns": [
        { "data": null },
        { "data": "nama" },
        { "data": "tanggal" },
        {
          "data": "id", render(data, type, full, meta) {
            return `<div class="pull-right">
              <button class="btn btn-info btn-sm"
                                data-id="${full.id}"
                                data-kelas_id="${full.kelas_id}"
                                data-status="${full.status}"
                                    data-toggle="modal" data-target="#tambahModal"
                                onclick="Ubah(this)">
                                <i class="bi bi-eye"></i>
              </button>
            </div > `
          }, className: "nowrap"
        }
      ],
      order: [
        [1, 'asc']
      ],
      columnDefs: [{
        orderable: false,
        targets: [0, 3]
      }],
    });
    new_table.on('draw.dt', function () {
      var PageInfo = table_html.DataTable().page.info();
      new_table.column(0, {
        page: 'current'
      }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1 + PageInfo.start;
      });
    });
  }


  // initial page
  profile_info();
  reward_render();
  tabel_pencairan();
  tabel_undang();

});

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