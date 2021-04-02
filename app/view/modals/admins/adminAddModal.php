<div class="modal fade" id="modal-add-admin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Admin Add</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="admin-add-form" class="form-horizontal" action="?url=admin-add-post" data-bvalidator-validate>
                <?php csrf(); ?>
                <div class="modal-body">


                    <div class="form-group row">
                        <label for="emailAdd"  class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" autocomplete="off" class="form-control" name="userEmail" id="emailAdd" placeholder="Email" data-bvalidator="required,email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passwordAdd" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">

                            <div class="input-group ">
                                <input type="password" autocomplete="off" name="userPass"  class="form-control password" id="passwordAdd" placeholder="Password" data-bvalidator="required,min[8]">
                                <span class="input-group-append">
                                    <button id="passwordEyeBtnAdd" type="button" class="btn btn-info passwordEyeBtn "><i id="passwordEyeAdd"  class="fa fa-eye passwordEye"></i></button>
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passwordAddConfirm" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <div class="input-group ">
                                <input type="password" autocomplete="off" name="userPassConfirm"  class="form-control password" id="passwordAddConfirm" placeholder="Confirm Password" data-bvalidator="equal[passwordAdd],required,min[8]">
                                <span class="input-group-append">
                                    <button id="passwordEyeBtnAddConfirm" type="button" class="btn btn-info passwordEyeBtn "><i id="passwordEyeAddConfirm"  class="fa fa-eye passwordEye"></i></button>
                                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="userTypeAdd" class="col-sm-3 col-form-label">User Type</label>
                        <div class="col-sm-9">
                            <select class="form-control userType" name="userType" id="userTypeAdd" placeholder="User Type" data-bvalidator="required">
                                <option value="4">Choose (Default : Customer)</option>

                            </select>
                        </div>
                    </div>



                </div>
                <div class="modal-footer  text-right">
                    <button type="submit" class="btn btn-outline-success">Save add</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>