const myModal = new bootstrap.Modal(document.getElementById('adsModal'), {
  keyboard: false
})

// timeout
const display = document.getElementById('hide_ads');
let count = 10;
const interval = 10 * 1000;
const intervalAds = setInterval(() => {
  count--;
  display.innerHTML = count;
}, 1000);
setTimeout(() => {
  clearInterval(intervalAds);
  display.innerHTML = `<button type="button" class="btn-close btn-sm m-0 p-0" data-bs-dismiss="modal" aria-label="Close"></button>`;
}, interval);
myModal.show();