<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css" <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  
                </div>
                <h4>Silahkan Masuk Disini</h4>

                <?php 
                    // Cetak jika ada notifikasi 
                        if($this->session->flashdata('sukses')) { 
                            echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>'; 
                        }
                    ?> 

                <?php echo form_open('login');?>

                <form class="user">
                  <div class="form-group">
                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    <p> <?php echo form_error('username'); ?></p>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control form-control-lg" id="exampleInputPassword" placeholder="Password">
                    <p> <?php echo form_error('password'); ?></p>
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="btnSubmit" value="Login" class="btn btn-block btn-primary btn-user btn-block">Masuk</button>
                       <?php echo form_close();?> 
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Belum Memiliki Akun? Buat <a href="./register" class="text-primary"> Disini..</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>