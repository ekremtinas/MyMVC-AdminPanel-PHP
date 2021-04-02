<?php
if (!isset($_SESSION)) { session_start(); }
$_SESSION["_tokenAllToken"] = hash("sha256", rand());
if (time() > $_SESSION['timeSess']) {
    $_SESSION['timeSess'] = null;
    header("Location:?url=sign-out");
    header("Location:?url=login");
}
/*
if ($_SESSION['userId'] == null) {
    header("Location:?url=login");
} */
if(false)
{

}
else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title><?php echo $title; ?> | Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="dist/css/main.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- ScrollBar -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Ionicons
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <?php if ($childStyle != null) {
            if(file_exists ($childStyle)==1) {
                include $childStyle;
            }
    }?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include "app/view/shared/navbar.php";?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include "app/view/shared/sidebar.php";?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include "app/view/shared/content-header.php";?>
            <!-- /.content-header -->

            <!-- Main content -->

            <?php include $childView;?>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include "app/view/shared/footer.php";?>

    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script>
        $(document).ready(function (){
            var pathname = window.location.href;
            var partsArray = pathname.split('/');
            var url = partsArray[4];
            console.log(url+"\n");
            var a_s = $('.nav-item .nav-link');
            a_s.removeClass('active');
            a_s.each(function () {
                if ($(this).attr('href') == url) {
                    $(this).parent().parent().parent().addClass('menu-open')
                    $(this).addClass('active');
                }
            });
        });
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- -->
    <script src="dist/js/adminlte.js"></script>
    <!-- Scrollbar -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- -->
    <script src="dist/js/demo.js"></script>

    <!-- İndex Main -->
    <script src="dist/js/pages/index/main.js"></script>
    <?php if ($childScript != null) {
        if(file_exists ($childScript)==1) {
            include $childScript;
        }
    }?>
    </body>
    </html>
    <?php
}
?>