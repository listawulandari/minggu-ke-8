<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar Barang</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css')?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/select2/select2.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>"> <!-- End layout styles -->
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="./dashboard">
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Hello Admin</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="font-weight-normal"> Admin </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                 <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                  <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">DATA</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Produk</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="./produk">Data Produk</a></li>
                  <li class="nav-item"> <a class="nav-link" href="./tambah">Tambah Produk</a></li>
                </ul>
              </div>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data Barang </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form Barang</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Produk</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>
                    </p> -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Gambar </th>
                          <th> Nama </th>
                          <th> Kategori </th>
                          <th> Harga </th>
                          <th> Deskripsi </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                          foreach($produk as $p) {
                          ?>
                          <tbody>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><img src="<?php echo base_url('gambar/'.$p->gambar.''); ?>"height="50px" width="50px"></td>
                              <td><?php echo $p->nama_produk ?></td>
                              <td><?php echo $p->kategori ?></td>
                              <td><?php echo $p->harga ?></td>
                              <td><?php echo $p->deskripsi ?></td>
                              <td class="project-actions text-right">
                                <div class="btn btn-outline-primary btn-sm">
                                  <i class="fas fa-folder">
                                    <?php echo anchor('produk/edit/'.$p->id_produk,'Edit'); ?>
                                  </i>
                                </div>
                              <div class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-folder">
                                  <?php echo anchor('produk/hapus/'.$p->id_produk,'Hapus'); ?>
                                  </i>
                                </div>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo('assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo('assets/js/off-canvas.js')?>"></script>
    <script src="<?php echo('assets/js/misc.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>