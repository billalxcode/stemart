<div class="modal fade" tabindex="-1" role="dialog" id="modalStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/customer/changeStatus') ?>" method="post">
                <?= csrf_field( ) ?>
                <div class="modal-body">
                        <input type="hidden" name="customer_username" value="0" id="customer_username">

                        <select name="status" id="" class="form-control selectric">
                            <option value="active">Aktif</option>
                            <option value="inactive">Nonaktif</option>
                            <option value="blocked">Banned</option>
                        </select>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("a#change_user_status").on("click", function() {
        let data_username = $(this).data("username")
        let modal_status = $("#modalStatus")
        modal_status.modal("show")
        modal_status.find("form").find("input#customer_username").val(data_username)
    })

    $(document).ready(function() {

    })
</script>