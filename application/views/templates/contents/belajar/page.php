<?php
$vip = isset($vip) ? $vip : 0;
?>
<div class="container mt-2">
  <div class="container">
    <div class="element-heading mt-3">
      <div class="d-flex justify-content-between align-items-between">
        <h6>List Kelas <?= $vip == 1 ? 'VIP' : 'Premium' ?></h6>
        <!-- <a href="">View All </a> -->
      </div>
    </div>
  </div>
  <div class="row g-3 justify-content-center" id="container">

  </div>
</div>

<script>
  const global_tipe = '<?= $vip ?>';
</script>