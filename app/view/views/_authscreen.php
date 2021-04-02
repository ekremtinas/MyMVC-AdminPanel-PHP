<div class=lockscreen>
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="?url=home"><img src="https://www.parts-soft.nl/images/logo.png" alt="Parts-Soft Logo"
                                     class="bg-white elevation-3  col-lg-8 mt-lg-2" style="opacity: .8"></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Mrs. / Mr.  <?php if (isset($_SESSION['email'])) {
                echo $_SESSION['email'];
            } ?></div>


        <h4 class="help-block text-center">
            You are not authorized to access this. You are <?php  if (isset($_SESSION['userType'])) {
                $userType = $_SESSION['userType'];
                if ($userType == 1) echo "Admin";
                else if ($userType == 2) echo "Supplier";
                else if ($userType == 3) echo "Stajyer";
                else if ($userType == 4) echo "Costumer";
            } ?>.
        </h4>
        <div class="text-center">

        </div>

    </div>
</div>