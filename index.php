<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contoh Halaman Bootstrap 5.3</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <!-- ICON -->
  <link rel="stylesheet" href="assets/icon/bootstrap-icons.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand shadow py-2" id="navbar" data-bs-theme="dark">
    <div class="container-fluid">
      <h4 class="text-white align-middle">
        SIP Phone Management
      </h4>
      <div class="navbar-nav">
        <div class="row nav-item text-nowrap text-white pe-3">
          <a class="col nav-link px-2 text-white" href="#"><i class="bi-person-circle pe-1"></i>Admin</a>
          <a class="col nav-link px-2 text-white" href="logout.php">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Nav Tabs -->
  <div class="container-fluid" id="content">
    <div class="row flex-nowrap">
      <div class="col-auto" id="sidebar">
        <div class="d-flex flex-column align-items-center pt-3 text-white min-vh-100">
            <ul class="nav nav-pills flex-column align-items-center px-0" >
                <li class="nav-item mb-2">
                    <a 
                      class="nav-link d-grid align-middle py-0 pb-1 px-2
                      <?php if(isset($_GET['page']) && $_GET['page'] == 'home' || $_GET['page'] == 'add' || $_GET['page'] == 'edit'){echo 'active';} ?>"
                      href="index.php?page=home"
                      style="background-color: 
                      <?php if(isset($_GET['page']) && $_GET['page'] == 'home' || $_GET['page'] == 'add' || $_GET['page'] == 'edit'){echo '#8e136b;';}?>">
                      <i class="fs-3 text-center bi-filetype-xml" style="color: white"></i>
                      <span class="text-center text-white">XML Generator</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a  
                      class="nav-link d-grid align-middle py-0 pb-1 px-4
                      <?php if(isset($_GET['page']) && $_GET['page'] == 'user'){echo 'active';} ?>"
                      href="index.php?page=user"
                      style="background-color: 
                      <?php if(isset($_GET['page']) && $_GET['page'] == 'user'){echo '#8e136b;';}?>">
                      <i class="fs-3 text-center bi-person" style="color: white"></i>
                      <span class="px-3 text-center text-white">Users</span> </a>
                </li>
                <li class="nav-item mb-2">
                    <a 
                      class="nav-link d-grid align-middle py-0 pb-1 px-3
                      <?php if(isset($_GET['page']) && $_GET['page'] == 'location'){echo 'active';} ?>"
                      href="index.php?page=location"
                      style="background-color: 
                      <?php if(isset($_GET['page']) && $_GET['page'] == 'location'){echo '#8e136b;';}?>">
                      <i class="fs-3 text-center bi-buildings" style="color: white"></i>
                      <span class="px-2 text-center text-white">Locations</span> </a>
                </li>
            </ul>
            <hr>
        </div>
      </div>
      <!-- Main Content -->
      <main class="col-11 mt-4 mx-auto">
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
          switch ($page) {
            case 'home':
              include "home.php";
              break;
            case 'user':
              include "user.php";
              break;
            case 'location':
              include "location.php";
              break;
            case 'add':
              include "add.php";
              break;
            case 'edit':
              include "edit.php";
              break;
            default:
              include "home.php";
              break;
          }
        } else {
            include "home.php";
        }
        ?>
      </main>
      <!-- End Main Content -->
    </div>
  </div>
  <!-- End Nav Tabs -->

  <!-- Bootstrap JS -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/bootstrap/js/popper.min.js"></script>
  <script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
  </script>
  <!-- Bootstrap JS -->
</body>

</html>