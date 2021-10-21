$(document).ready(function () {
    let value_key = localStorage.getItem('key')
    // cekAuth()
    function cekAuth() {
        if (value_key != null) {
            window.location = '<?= base_url() ?>home';
        }
    }
    $('#flogin').submit(function (ev) {
        ev.preventDefault();
        setBtnLoading('#btn-submit', 'Submit')
        $.ajax({
            url: api_base_url + 'login',
            cache: false,
            contentType: false,
            processData: false,
            data: new FormData(this),
            type: 'post',
            success: function (data) {
                localStorage.setItem('key', data.data.key);
                localStorage.setItem('id', data.data.id);
                localStorage.setItem('email', data.data.email);
                localStorage.setItem('nama', data.data.nama);
                localStorage.setItem('level', data.data.level);
                setToast('success', 'primary', 'Sukses', "Login Berhasil");
                setTimeout(() => {
                    window.location = "<?= base_url() ?>home";
                }, 300);
            },
            error: function ($xhr) {
                setBtnLoading('#btn-submit', 'Submit', false);
                if (!$xhr.responseText) {
                    setToast('danger', 'danger', 'Failed', "Mohon periksa koneksi anda.");
                    return;
                }
                const response = JSON.parse($xhr.responseText);
                setToast('danger', 'danger', 'Failed', response.message);
            },
            complete: function () {
                setBtnLoading('#btn-submit', 'Submit', false);
            }
        });
    })
})

function setBtnLoading(element, text, status = true) {
    const el = $(element);
    if (status) {
        el.attr("disabled", "");
        el.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ${text}`);
    } else {
        el.removeAttr("disabled");
        el.html(text);
    }
}