<div class="modal fade" id="modal-delete-admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="admin-delete-form" action="?url=admin-delete-post">
                <?php csrf(); ?>
            <div class="modal-header">
                <h4 class="modal-title">Admin Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Is <span data-id="" id="deleteConfirmText"> </span> delete?</h5>
            </div>
            <div class="modal-footer  text-right">
                <button type="submit" class="btn btn-outline-danger">Save delete</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>