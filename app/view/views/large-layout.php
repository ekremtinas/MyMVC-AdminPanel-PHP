
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?> | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="dist/css/fonts-googleapis.css" rel="stylesheet">

  <?php if ($childStyle != null) {include $childStyle;}?>

</head>
<body class="hold-transition login-page">
<div class="login-box ">
  <div class="login-logo">
      <div class="bg-white elevation-3  col-lg-12"
           style="opacity: .8">
          Login
      </div>
  </div>
  <!-- /.login-logo -->


  <?php include $childView;?>



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<?php if ($childScript != null) {include $childScript;}?>
</body>
</html>


