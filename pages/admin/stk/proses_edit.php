<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="../../../sweetalert2-11.1.5/dist/sweetalert2.min.css">
</head>

<body>
    <script src="../../../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../sweetalert2-11.1.5/dist/sweetalert2.all.min.js"></script>
</body>

</html>



<?php
include '../../../koneksi.php';

$id_stk = $_POST['id_stk'];
$jenis = $_POST['jenis'];
$kategori = $_POST['kategori'];
$no_dokumen = $_POST['no_dokumen'];
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];

$hasil = mysqli_query($koneksi,"UPDATE tb_stk SET jenis='$jenis', kategori='$kategori', no_dokumen='$no_dokumen', judul='$judul',  keterangan='$keterangan' WHERE id_stk='$id_stk'");

<<<<<<< HEAD
=======
$query = "UPDATE tb_stk SET jenis='$jenis', kategori='$kategori', no_dokumen='$no_dokumen', judul='$judul',  keterangan='$keterangan', file_pdf='$file_pdf' WHERE id_stk='$id_stk'";
$hasil= mysqli_query($koneksi, $query);
//$hasil = mysqli_query($koneksi, "update tb_stk set jenis='$jenis', kategori='$kategori', no_dokumen='$no_dokumen', judul='$judul',  keterangan='$keterangan', file_pdf='$file_pdf'  where id_stk='$id_stk'");
>>>>>>> 6eaa64048ac3261d50d45891a5084bfefb150a29
if ($hasil) {
    echo "<script>
    setTimeout(() => { 
        Swal.fire(
            'Berhasil!',
            'Data berhasil disimpan!',
            'success'
          ) 
        },10); 
        window.setTimeout(() => { 
         window.location.replace('data_stk.php');
        } ,1000); 
    </script>";
} else {
    "<script>
    setTimeout(() => { 
        Swal.fire(
            'Gagal!',
            'Data gagal ditambahkan!',
            'error'
          ) 
        },10); 
        window.setTimeout(() => { 
         window.location.replace('edit.php');
        } ,5000);
    </script>";
}
?>