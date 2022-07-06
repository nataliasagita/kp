<?php
include '../../../koneksi.php';

$id_sp = $_GET['id_sp'];

$query = mysqli_query($koneksi, "SELECT*FROM tb_sp where id_sp='$id_sp'");
$hasil = mysqli_fetch_array($query);
$file_pdf = $hasil['file_pdf'];

$file = "../../../assets/upload/sp/pdf/$file_pdf";
$filename = "$file_pdf";

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
