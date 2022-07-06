<?php
include '../../../koneksi.php';

$id_sp = $_GET['id_sp'];

$hapus = mysqli_query($koneksi, "SELECT*FROM tb_sp WHERE id_sp='$id_sp'");
$data = mysqli_fetch_assoc($hapus);

$file_pdf = $data['file_pdf'];
$folder_pdf = "../../../assets/upload/sp/pdf/";

//hapus file pdf di folder
if (file_exists($folder_pdf . $file_pdf)) {
    unlink($folder_pdf . $file_pdf);
}

mysqli_query($koneksi, "DELETE FROM tb_sp WHERE id_sp=$id_sp");
echo "<script> window.location = 'data_sp.php' </script>";
