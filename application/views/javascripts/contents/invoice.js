$(function () {
  page_render();
  function page_render() {
    $.ajax({
      method: 'get',
      url: api_base_url + 'rekening',
      data: null
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

  function template(data, num) {
    return `
    <h6 class="my-0 py-0">${data.nama_bank}</h6>
    <span>Nomor Rekening:</span>
    <div class="d-flex justify-content-between align-items-center">
      <input type="text" value="${data.no_rekening}" id="rek_${num}" class="no_rek" readonly>
      <a href="#" class="text-decoration-none" onclick="copy_rekening('rek_${num}')">Salin</a>
    </div>
    <span>Atas Nama:</span>
    <p class="fw-bold">${data.atas_nama}</p>
    `;
  }
});

function copy_rekening(id) {
  /* Get the text field */
  var copyText = document.getElementById(id);

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
}