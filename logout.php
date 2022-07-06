<?php
$tgl_sekarang = date("Y-m-d"); //tanggal sekarang
$tgl_mulai = "2021-09-15"; // tanggal launching aplikasi
$jangka_waktu = strtotime('+2 days', strtotime($tgl_mulai)); // jangka waktu + 365 hari
$tgl_exp = date("Y-m-d", $jangka_waktu); //tanggal expired
if ($tgl_sekarang >= $tgl_exp) {
    echo "<span class='Apple-tab-span' style='white-space: pre'> </span>Data sudah tidak berlaku";
} else {
    echo "<span class='Apple-tab-span' style='white-space: pre;'> </span>Masih dalam jangka waktu";
}

$timestamp = strtotime('2017-02-01'); // 1488236400
echo date('d-m-Y', strtotime('+3 years', $timestamp)); // 01-03-2017