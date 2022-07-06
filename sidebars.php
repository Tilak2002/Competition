<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Sidebars · Bootstrap v5.2</title>

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery Links -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    <!-- Fancybox Links -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>


    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
    
    <!-- <link href="_root.scss" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  </head>
  <body>
    <!-- header.php -->

  <main class="d-flex flex-nowrap ">

  <h1 class="visually-hidden">Sidebars examples</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="20" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5">Learning Management</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto" id="nav">
      
      <li>
        <a href="customer_form.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="6" height="16"><use xlink:href="#table"/></svg>
          Registration
        </a>
      </li>
      <li>
        <a href="purchase_record.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="6" height="16"><use xlink:href="#table"/></svg>
          Student Records
        </a>
      </li>
      
      <li>
        <a href="setting.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="6" height="16"><use xlink:href="#table"/></svg>
          Setting
        </a>
      </li>
     
    </ul>
    <hr>

    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
      data-bs-toggle="dropdown" aria-expanded="false">
      <!-- <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2"> -->
      <strong>More</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><a class="dropdown-item" id="sign_out" data-fancybox data-src="#logout"  href="#"><i class="bi bi-power"></i> Sign Out</a></li>
    </ul>
</div>

  </div>
<!-- Fancybox code -->
<div id="logout" style="display:none;">
        <div class="modal-body p-4 text-center">
          <h5 class="mb-0">Are you Sure that you want to Logout?</h5> 
        </div>

        <div class="modal-footer flex-nowrap p-0">
          <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" id="yes"><strong>Yes</strong></button>
          <button data-fancybox-close type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong>No</strong></button>
        </div>
</div>
  

    <script src="http://localhost/assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     
      </main>
<!-- sidebar.php -->
     
  </body>
</html>
