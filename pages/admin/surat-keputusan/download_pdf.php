<?php
include '../../../koneksi.php';

$id_sk = $_GET['id_sk'];

$query = mysqli_query($koneksi, "SELECT*FROM tb_sk where id_sk='$id_sk'");
$hasil = mysqli_fetch_array($query);
$file_pdf = $hasil['file_pdf'];

$file = "../../../assets/upload/sk/pdf/$file_pdf";
$filename = "$file_pdf";

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
