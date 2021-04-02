<div class="modal fade" id="modal-edit-admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Admin Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="admin-edit-form" class="form-horizontal" action="?url=admin-edit-post" data-bvalidator-validate>
                <?php csrf(); ?>
                <div class="modal-body">
                    <input type="text" autocomplete="off" class="form-control" name="userId" id="userId" hidden >

                    <div class="form-group row">
                        <label for="userEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" autocomplete="off" class="form-control" name="userEmail" id="userEmail" placeholder="Email" data-bvalidator="required,email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="userPass" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">

                            <div class="input-group ">
                                <input type="password" autocomplete="off" class="form-control password" name="userPass" id="userPass" placeholder="Password" data-bvalidator="required,min[8]">
                                <span class="input-group-append">
                                    <button id="passwordEyeBtn" type="button" class="btn btn-info passwordEyeBtn"><i id="passwordEye"  class="fa fa-eye passwordEye"></i></button>
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="userType" class="col-sm-3 col-form-label">User Type</label>
                        <div class="col-sm-9">
                            <select class="form-control userType" name="userType" id="userType" placeholder="User Type" data-bvalidator="required">
                                <option>Choose</option>

                            </select>
                        </div>
                    </div>




                </div>
                <div class="modal-footer text-right">
                    <button type="submit" class="btn btn-outline-info">Save edit</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>