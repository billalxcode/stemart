<div class="modal fade" tabindex="-1" role="dialog" id="modalStatus">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/logout') ?>" method="post">
                <?= csrf_field( ) ?>
                <div class="modal-body">
                    <p>
                        Dengan ini anda setuju untuk menghapus sesi login anda, silahkan klik setuju untuk melanjutkan.
                    </p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Setuju</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#btn-logout").on("click", function() {
        let modalStatus = $("#modalStatus")
        modalStatus.modal("show")

    })
</script>