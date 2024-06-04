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
  <nav class="navbar navbar-expand-lg bg-primary border-bottom border-secondary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="logout.php">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Nav Tabs -->
  <div class="container-fluid">
    <div class="row pb-2 mb-3">
      <ul class="nav nav-tabs bg-info ps-4 border-bottom border-secondary shadow">
        <li class="nav-item">
          <a class="nav-link text-black
            <?php if(isset($_GET['page']) && $_GET['page'] == 'home' || $_GET['page'] == 'add' || $_GET['page'] == 'edit'){echo 'active';} ?>"
            aria-current="page" 
            href="index.php?page=home">
            <i class="bi bi-list pe-2"style="font-size: 1rem; color: black;"></i>List
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black
            <?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo 'active';} ?>"
            aria-current="page"
            href="index.php?page=contact">
            <i class="bi bi-person-fill pe-2"style="font-size: 1rem; color: black;"></i>User
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!--  -->

  <!--  -->
  <main class="container-fluid">
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'home':
          include "home.php";
          break;
        case 'contact':
          include "contact.php";
          break;
        case 'user':
          include "user.php";
          break;
        case 'add':
          include "add.php";
          break;
        case 'edit':
          include "edit.php";
          break;
        case 'list':
          include "product-list.php";
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
  <!--  -->

  <!-- Bootstrap JS -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>