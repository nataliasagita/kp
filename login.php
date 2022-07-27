<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/ready.css">
    <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="assets/css/costum.css">
    <link rel="stylesheet" href="sweetalert2-11.1.5/dist/sweetalert2.min.css">
</head>

<body>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="sweetalert2-11.1.5/dist/sweetalert2.all.min.js"></script>
</body>

</html>


<?php
include "koneksi.php";

if(isset($_POST['input'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($data)){
        echo "<script>
        setTimeout(() => { 
            Swal.fire(
                'Berhasil!',
                'Berhasil Login!',
                'success'
            ) 
            },10); 
            window.setTimeout(() => { 
            window.location.replace('examples/index.html');
            } ,2000); 
        </script>";
    }else{
        "<script>
        setTimeout(() => { 
            Swal.fire(
                'Gagal!',
                'Data gagal ditambahkan!',
                'error'
            ) 
            },10); 
            window.setTimeout(() => { 
            window.location.replace('login.php');
            } ,2000);
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login | E-Book Disposisi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/ready.css">
    <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="assets/img/logo.png">
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="assets/img/logo teks.png" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="assets/img/logo-kominfo.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3 mb-4">
                            <h5 class="font-weight-bold">E-Disposisi Dinas Komunikasi dan Informatika
                                <br>
                                Kota Lubuklinggau
                            </h5>
                        </div>
                        <form action="" method="POST">
                            <div class="row px-3">
                                <label for="username" class="mb-1">
                                    <h6 class="mb-0 text-sm">Username</h6>
                                </label>
                                <input class="mb-4" type="username" name="username" id="username" placeholder="Username" required="">
                            </div>
                            <div class="row px-3">
                                <label for="password" class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Enter password" id="password" required="">
                            </div>
                            <div class="row mb-3 px-3 py-5">
                                <button type="submit" class="btn btn-blue text-center" name="input" value="login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2"></small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>