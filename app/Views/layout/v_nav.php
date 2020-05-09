

                  

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <h5 style="color:white;">Selamat Datang,<?= $user;?></h5>
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url();?>/templateadmin/dist/img/AdminLTELogo.png" alt="AdminLTE" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Role ID : <?= $role_id;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="image">
          <img src="<?= base_url();?>/templateadmin/dist/img/andrian.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $user;?></a>
        </div>
      </div>

      <!-- Query Menu -->
      <?php
      $db = \Config\Database::connect();
      $roleid = session()->getTempdata('role_id');
          $queryMenu = "SELECT `user_menu`.`id`,`menu`
          FROM `user_menu` JOIN `user_access_menu`
            ON `user_menu`.`id` = `user_access_menu`.`menuid`
        WHERE `user_access_menu`.`roleid` = $roleid
        ORDER BY `user_access_menu`.`menuid` ASC";
        $menu = $db->query($queryMenu)->getResultArray();
       

      ?>
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php foreach ($menu as $m) :?>  
               <li class="nav-item has-treeview menu-close">
               
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 <?= $m['menu']; ?>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
                        <?php

            $menuId = $m['id'];
            $querySubMenu = "SELECT *
            FROM `user_sub_menu` JOIN `user_menu` 
              ON `user_sub_menu`.`menuid` = `user_menu`.`id`
            WHERE `user_sub_menu`.`menuid` = $menuId";
            $submenu = $db->query($querySubMenu)->getResultArray();
            ?>
            <?php foreach ($submenu as $sub) :?>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url($sub['url']);?>" class="nav-link active">
                  <i class="<?= $sub['icon'];?>"></i>
                  <p><?= $sub['title'];?></p>
                </a>
              </li>
              
            </ul>
            <?php endforeach;?>
          </li>
               <?php endforeach;?>
 
          <li class="nav-item">
            <a href="<?= base_url('Auth/logout');?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman <?= $judul;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $judul;?></a></li>
              <li class="breadcrumb-item active">Halaman <?=$judul;?></li>
            </ol>
      

    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <?php if(session()->getTempdata('role_id') == '2') : ?>
    <script>
      var $admin = document.getElementById('listadmin')

      $admin.parentNode.removeChild($admin);



  </script>
  <?php endif; ?>
