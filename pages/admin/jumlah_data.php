<?php
$query_stk = mysqli_query($koneksi, "SELECT*FROM tb_stk");
$query_iso = mysqli_query($koneksi, "SELECT*FROM tb_iso");
$query_sp = mysqli_query($koneksi, "SELECT*FROM tb_sp");
$query_sk = mysqli_query($koneksi, "SELECT*FROM tb_sk");
$query_kebijakan = mysqli_query($koneksi, "SELECT*FROM tb_kebijakan");
$query_rtm = mysqli_query($koneksi, "SELECT*FROM tb_rtm");
$query_cip = mysqli_query($koneksi, "SELECT*FROM tb_cip");
$query_komet = mysqli_query($koneksi, "SELECT*FROM tb_komet");

$jumlah_stk = mysqli_num_rows($query_stk);
//$jumlah_iso = mysqli_num_rows($query_iso);
$jumlah_sp = mysqli_num_rows($query_sp);
$jumlah_sk = mysqli_num_rows($query_sk);
$jumlah_kebijakan = mysqli_num_rows($query_kebijakan);
$jumlah_rtm = mysqli_num_rows($query_rtm);
$jumlah_cip = mysqli_num_rows($query_cip);
$jumlah_komet = mysqli_num_rows($query_komet);
