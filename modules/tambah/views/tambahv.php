<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Barang</title>
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
          <a class="navbar-brand brand-logo-mini" href=""></a>
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
              <h3 class="page-title"> Form Tambah </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tambah Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form Tambah</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <!--  -->
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Barang</h4>
                    <p class="card-description"> Input Barang Baru </p>
                    

                      <div class="col-md-6">
                        <p><?php echo $this->session->flashdata('msg')?></p>
                        <form action="tambah/upload" class="form-simple" method="post" enctype="multipart/form-data">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputID">ID Produk</label>
                        <input type="text" name="id_produk" value="<?php echo set_value('id_produk');?>" class="form-control" placeholder="ID Produk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNama">Nama Produk</label>
                        <input type="text" name="nama_produk" value="<?php echo set_value('nama_produk');?>" class="form-control" placeholder="Nama Produk">
                      <div class="form-group">
                        <label for="exampleInputHarga">Harga</label>
                        <input type="text" name="harga" value="<?php echo set_value('harga');?>" class="form-control" placeholder="Harga">
                      </div>
                      
                        <div class="form-group">
                          <label for="">Kategori</label>
                          <select name="kategori" class="custom-select">
                            <option value="">Pilih Kategori</option>
                            
                            <?php foreach ($kategori as $p) {
                             ?>
                          
                          <option value="<?php echo $p->id_kategori?>"><?php echo $p->nama_kategori ?>;</option>
                        <?php }; ?>
                        </select>
  
                         
                        </div>
                      </div>
                            <div class="form-group">
                        <label for="exampleDeskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" name="deskripsi" value="<?php echo set_value('deskripsi');?>" rows="4"></textarea>
                </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Input</label>
                        	<div class="input-group">
                          		<input type="file" name="gambar">
                        	</div>
                      	</div>
                   	<input type="submit" value="Tambah" class="btn btn-primary btn-block">
                      <?php echo form_close() ?>
              	</form>
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
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/select2/select2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/typeahead.js/typeahead.bundle.min.js')?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js')?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/typeahead.js')?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js')?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>