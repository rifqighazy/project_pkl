<!-- Script php post / get -->
<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: index.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contoh Halaman Bootstrap 5.3</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- ICON -->
    <link rel="stylesheet" href="assets/icon/bootstrap-icons.min.css">
    <!-- CSS -->
    <style>
        body {
        background-color: #3e7874;
        }
    </style>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-5 position-absolute top-50 start-50 translate-middle">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="text-center text-white pt-2">Login Page</h3>
                        </div>
                        <div class="card-body">
                            <form action="query_login.php" method="post" autocomplete="off">
                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <input
                                        type="username"
                                        class="form-control"
                                        name="username"
                                        id="username"
                                        placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <label for="Password">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="Password"
                                        placeholder="Password">
                                </div>
                                <div class="float-end">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <p class="text-center mb-0">If you have not account
                                    <a href="register.php">Register Now</a>
                                </p>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/js/popper.min.js"></script>
    </body>
</html>