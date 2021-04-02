

<section class="content">
      <div class="card">
        <div class="card-header row justify-content-between">
            <h3 class="card-title "><?php echo $title; ?></h3>
        </div>
          <div class=" text-center" > <div class="lds-ellipsis"><div></div><div></div><div></div></div>
        <!-- /.card-header -->
        <div class="card-body">

          <div id="adminGrid"></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>

<?php
include "app/view/modals/admins/adminAddModal.php";
include "app/view/modals/admins/adminEditModal.php";
include "app/view/modals/admins/adminDeleteModal.php";
?>