<?php
include '../../../koneksi.php';

$id_stk = $_GET['id_stk'];

$query = mysqli_query($koneksi, "SELECT*FROM tb_stk where id_stk='$id_stk'");
$hasil = mysqli_fetch_array($query);
$file_pdf = $hasil['file_pdf'];

$file = "../../../assets/upload/stk/pdf/$file_pdf";
$filename = "$file_pdf";

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
