<?php
include '../../../koneksi.php';

$id_stk = $_GET['id_stk'];

$query = mysqli_query($koneksi, "SELECT*FROM tb_stk where id_stk='$id_stk'");
$hasil = mysqli_fetch_array($query);
$file_word = $hasil['file_word'];

$file = "../../../assets/upload/stk/word/$file_word";
$filename = "$file_word";

header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: inline; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
