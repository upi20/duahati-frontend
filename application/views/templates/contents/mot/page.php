<div class="container">
  <div class="card user-info-card">
    <div class="card-body p-0" id="body">

    </div>
  </div>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body text-center">
        <input type="hidden" id="id_pemain">
        Apakah anda yakin akan vote pemain <span id="nama-pemain"></span>..?
      </div>
      <div class="modal-footer py-2 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" id="btn-vote">Confirm</button>
      </div>
    </div>
  </div>
</div>