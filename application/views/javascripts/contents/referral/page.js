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
                                data-atas_nama="${full.atas_nama}"
                                data-nama_bank="${full.nama_bank}"
                                data-no_rekening="${full.no_rekening}"
                                data-jumlah_dana="${full.jumlah_dana}"
                                data-foto="${full.foto}"
                                data-catatan="${full.catatan}"
                                data-tanggal="${full.tanggal}"
                                data-tanggal_respon="${full.tanggal_respon}"
                                data-status="${full.status}"
                                data-status_str="${full.status_str}"
                                data-bs-toggle="modal"
                                data-bs-target="#modal_detail"
                                onclick="DetailPencairan(this)">
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
        // {
        //   "data": "id", render(data, type, full, meta) {
        //     return `<div class="pull-right">
        //       <button class="btn btn-info btn-sm"
        //                         data-id="${full.id}"
        //                         data-kelas_id="${full.kelas_id}"
        //                         data-status="${full.status}"
        //                             data-toggle="modal" data-target="#tambahModal"
        //                         onclick="Ubah(this)">
        //                         <i class="bi bi-eye"></i>
        //       </button>
        //     </div > `
        //   }, className: "nowrap"
        // }
      ],
      order: [
        [1, 'asc']
      ],
      columnDefs: [{
        orderable: false,
        targets: [0]
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


  function tabel_pendapatan() {
    const table_html = $('#tbl_pendapatan');
    table_html.dataTable().fnDestroy()
    const new_table = table_html.DataTable({
      "ajax": {
        "url": api_base_url + 'member/referral/riwayat_pendapatan',
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
        { "data": "tanggal" },
        {
          "data": "jumlah_dana", render(data, type, full, meta) {
            return `Rp. ${format_rupiah(data)}`;
          }
        },
        {
          "data": "jenis", render(data, type, full, meta) {
            console.log(data);
            return data == 1 ? `Reward mengundang ${full.nama_diundang}` : '';
          }
        },
        // {
        //   "data": "id", render(data, type, full, meta) {
        //     return `<div class="pull-right">
        //       <button class="btn btn-info btn-sm"
        //                         data-id="${full.id}"
        //                         data-kelas_id="${full.kelas_id}"
        //                         data-status="${full.status}"
        //                             data-toggle="modal" data-target="#tambahModal"
        //                         onclick="Ubah(this)">
        //                         <i class="bi bi-eye"></i>
        //       </button>
        //     </div > `
        //   }, className: "nowrap"
        // }
      ],
      order: [
        [1, 'asc']
      ],
      columnDefs: [{
        orderable: false,
        targets: [0]
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


  $("#fcairkan").submit(function (ev) {
    ev.preventDefault();
    const data = new FormData(this);
    data.append('key', value_key);
    setBtnLoading('button[type=submit]', 'Submit')
    $.ajax({
      url: api_base_url + 'member/referral/pencairan',
      cache: false,
      contentType: false,
      processData: false,
      data: data,
      type: 'post',
      success: function (data) {
        setBtnLoading('button[type=submit]', 'Submit', false);
        if (data.status) {
          setToast('success', 'primary', data.message);
          $("#modal_pencairan").modal('toggle')
          tabel_pencairan();
        } else {
          setToast('danger', 'danger', 'Failed', data.message);
        }

      },
      error: function ($xhr) {
        setBtnLoading('button[type=submit]', 'Submit', false);
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

  // initial page
  profile_info();
  reward_render();
  tabel_pencairan();
  tabel_undang();
  tabel_pendapatan();

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

function DetailPencairan(datas) {
  const data = datas.dataset;
  $('#detail_tgl_input').html(data.tanggal)
  $('#detail_tgl_respon').html(data.tanggal_respon == 'null' ? '' : data.tanggal_respon)
  $('#detail_nama_bank').html(data.nama_bank)
  $('#detail_no_rekening').html(data.no_rekening)
  $('#detail_atas_nama').html(data.atas_nama)
  $('#detail_catatan').html(data.catatan)
  $('#detail_jumlah_dana').html(`Rp. ${format_rupiah(data.jumlah_dana)}`)

  let color = 'success';
  color = data.status == 0 ? 'warning' : color;
  color = data.status == 1 ? 'success' : color;
  color = data.status == 2 ? 'danger' : color;
  const status = `<span class="text-${color} font-weight-bold">${data.status_str}</span>`;

  $('#detail_status').html(status)

  if (data.status == 1) {
    $("#detail_bukti").attr('src', `${api_base_url}../files/bukti_pencairan/${data.foto}`)
    $("#detail_bukti").removeAttr('style')
    $("#detail_bukti_title").removeAttr('style')
  } else {
    $("#detail_bukti").attr('style', 'display:none')
    $("#detail_bukti_title").attr('style', 'display:none')
  }
}