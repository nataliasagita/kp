<?php
$query_stk = mysqli_query($koneksi, "SELECT*FROM tb_stk");
$query_user = mysqli_query($koneksi, "SELECT*FROM user");

$jumlah_stk = mysqli_num_rows($query_stk);
$user = mysqli_num_rows($query_user);