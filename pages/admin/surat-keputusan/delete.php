<?php
include '../../../koneksi.php';

$id_sk = $_GET['id_sk'];

$hapus = mysqli_query($koneksi, "SELECT*FROM tb_sk WHERE id_sk='$id_sk'");
$data = mysqli_fetch_assoc($hapus);

$file_pdf = $data['file_pdf'];
$folder_pdf = "../../../assets/upload/sk/pdf/";

//hapus file pdf di folder
if (file_exists($folder_pdf . $file_pdf)) {
    unlink($folder_pdf . $file_pdf);
}

mysqli_query($koneksi, "DELETE FROM tb_sk WHERE id_sk=$id_sk");
echo "<script> window.location = 'data_sk.php' </script>";
