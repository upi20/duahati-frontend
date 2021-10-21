<style>
  .custom-list {
    list-style: none;
    padding-left: 0;
    margin-top: 0;
    margin-left: 0;
  }

  .custom-list li {
    position: relative;
    padding-left: 40px;
    margin-top: 12px;
  }

  .custom-list li:before {
    content: '';
    width: 30px;
    height: 30px;
    position: absolute;
    background-image: url('<?= base_url() ?>assets/img/custom/trophy.png');
    background-size: cover;
    background-position: center;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
  }

  .custom-list li span {
    color: white;
    position: absolute;
    left: 9px;
    font-size: .5rem;
    font-weight: bold;
  }
</style>
<div class="container">
  <h2 class="h6 mt-2 text-uppercase">pemenang kursi berhadiah</h2>
  <ul class="custom-list">
    <li><span>#1</span> Gusdul</li>
    <li><span>#2</span> Dede</li>
    <li><span>#3</span> Febri</li>
  </ul>

  <h2 class="h6 mt-4 text-uppercase">pemenang tebak man of the match</h2>
  <ul class="custom-list">
    <li><span>#1</span> Gusdul</li>
    <li><span>#2</span> Dede</li>
    <li><span>#3</span> Febri</li>
  </ul>

  <h2 class="h6 mt-4 text-uppercase">pemenang tebak skor</h2>
  <ul class="custom-list">
    <li><span>#1</span> Gusdul</li>
    <li><span>#2</span> Dede</li>
    <li><span>#3</span> Febri</li>
  </ul>
</div>