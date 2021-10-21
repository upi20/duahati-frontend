$(document).ready(() => {

  page_render();
  function page_render() {
    const body_element = $("#body");
    body_element.html('<span class="text-center">Loading</span>');
    $.ajax({
      method: 'get',
      url: api_base_url + 'member/Result',
      data: {
        key: value_key,
        id: global_id_pertandingan
      }
    }).done((datas) => {
      const data = datas.data;

      const kursi = $('#tbl_kursi>tbody');
      kursi.html('');
      kursi.html(template(data.kursi));

      const mot = $('#tbl_mot>tbody');
      mot.html('');
      mot.html(template(data.mot));

      const score = $('#tbl_skor>tbody');
      score.html('');
      score.html(template(data.score));

    }).fail(($xhr) => {

    })
  }

  function template(data) {
    let html = ``;
    num = 1;
    data.forEach((e) => {
      html += `
        <tr>
          <td>${num}. ${e.nama}</td>
          <td>${num}. ${e.result} ${e.menang != null ? " (" + e.menang + ")" : ''}</td>
        </tr>
      `;
      num++;
    })
    return html;
  }
})