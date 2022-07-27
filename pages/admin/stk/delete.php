<?php
include '../../../koneksi.php';

$id_stk = $_GET['id_stk'];

$hapus = mysqli_query($koneksi, "SELECT*FROM tb_stk WHERE id_stk='$id_stk'");
$data = mysqli_fetch_assoc($hapus);

$file_pdf = $data['file_pdf'];
$folder_pdf = "../../../assets/upload/stk/pdf/";

$file_word = $data['file_word'];
$folder_word = "../../../assets/upload/stk/word/";

//hapus file pdf di folder
if (file_exists($folder_pdf . $file_pdf)) {
    unlink($folder_pdf . $file_pdf);
}

//hapus file word di folder
if (file_exists($folder_word . $file_word)) {
    unlink($folder_word . $file_word);
}

mysqli_query($koneksi, "DELETE FROM tb_stk WHERE id_stk=$id_stk");
echo "<script> window.location = 'data_stk.php' </script>";
