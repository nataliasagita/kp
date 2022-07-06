<?php
include '../../../koneksi.php';

$id_kebijakan = $_GET['id_kebijakan'];

$query = mysqli_query($koneksi, "SELECT*FROM tb_kebijakan where id_kebijakan='$id_kebijakan'");
$hasil = mysqli_fetch_array($query);
$file_pdf = $hasil['file_pdf'];

$file = "../../../assets/upload/kebijakan/pdf/$file_pdf";
$filename = "$file_pdf";

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
