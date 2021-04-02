<div class="card elevation-3">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form id="login-form" action="?url=login-post" method="post" data-bvalidator-validate>
            <?php csrf(); ?>
            <div class="input-group mb-3">
                <input name="email" type="text" class="form-control" id="email" placeholder="Email" data-bvalidator="required,email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input name=password type="password" autocomplete="off" class="form-control" id=password placeholder="Password" data-bvalidator="required,min[8]">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button id="login-submit" name="btnLogin" type="submit" class="btn btn-outline-info  btn-block">Sign
                        In
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <!--  <p class="mb-1">
            <a href="forgot-password.php">I forgot my password</a>
          </p>
          <p class="mb-0">
            <a href="register.php" class="text-center">Register a new membership</a>
          </p>
        </div>-->
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
