<?php
include '../../../koneksi.php';

$id_stk = $_POST['id_stk'];
$bagian = $_POST['bagian'];
$jenis = $_POST['jenis'];
$kategori = $_POST['kategori'];
$no_dokumen = $_POST['no_dokumen'];
$judul = $_POST['judul'];
$revisi = $_POST['revisi'];
$tmt_berlaku = $_POST['tmt_berlaku'];
//kadaluarsa
$timestamp = strtotime($tmt_berlaku);
$kadaluarsa = date('Y-m-d', strtotime('+3 years', $timestamp));
$keterangan = $_POST['keterangan'];
$file_pdf = $_FILES['file_pdf'];
$file_word = $_FILES['file_word'];
