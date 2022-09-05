<div class="modal fade" tabindex="-1" role="dialog" id="modalStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/customer/changeStatus') ?>" method="post">
                    <input type="hidden" name="customer_id" value="0" id="customer_id">

                    <select name="status" id="" class="selectrict">
                        <option value="active">Aktif</option>
                        <option value="inactive">Nonaktif</option>
                        <option value="blocked">Banned</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("#change_user_status").on("click", function() {
        let data_id = $(this).data("id")
        let modal_status = $("#modalStatus")
        modal_status.modal("show")
        modal_status.find("form").find("input#customer_id").val(data_id)
    })

    $(document).ready(function() {

    })
</script>