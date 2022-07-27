<?php
include '../../../koneksi.php';

$id_stk = $_GET['id_stk'];
$hasil = mysqli_query($koneksi, "SELECT*FROM tb_stk WHERE id_stk='$id_stk'");
while ($data = mysqli_fetch_array($hasil)) {
    $jenis = $data['jenis'];
    $kategori = $data['kategori'];
    $no_dokumen = $data['no_dokumen'];
    $judul = $data['judul'];
    $keterangan = $data['keterangan'];
    $file_pdf = $data['file_pdf'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Detail | E-Book Disposisi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../../assets/img/logo.png">
    <link rel="stylesheet" href="../../../datatables.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="../index.php" class="logo">
                    &nbsp;
                    <img src="../../../assets/img/logo teks.png" alt="" width="150px" height="50px">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg bg-biru">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group bg-white">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<img src="../../../assets/img/avatar.png" alt="user-img" width="36" class="img-circle">
								<span class="text-white">Admin</span>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img">
											<img src="../../../assets/img/avatar.png" alt="user">
										</div>
										<div class="u-text">
											<h4>Admin</h4>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../../../login.php">
									<i class="la la-power-off"></i>
									&nbsp; Logout
								</a>
							</ul>
						</li>
					</ul>
                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
						<a href="../../../examples/index.html">
							<i class="la la-dashboard"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="tambah.php">
							<i class="la la-keyboard-o"></i>
							<p>Forms</p>
						</a>
					</li>
					<li class="nav-item active bg-active">
						<a href="data_stk.php">
							<i class="la la-book"></i>
							<p>Buku Surat Masuk</p>
						</a>
					</li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-md-6 col-8 align-self-center">
                            <h4 class="page-title font-weight-bold">Detail</h4>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group form-inline">
                                            <label for="no_dokumen" class="col-md-2 col-form-label">Nomor Surat</label>
                                            <label for="" class="col-form-label">: &nbsp; <?= $jenis; ?></label>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="kategori" class="col-md-2 col-form-label">Asal Surat</label>
                                            <label for="" class="col-form-label">: &nbsp; <?= $kategori; ?></label>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="no_dokumen" class="col-md-2 col-form-label">Tanggal Diterima</label>
                                            <label for="" class="col-form-label">: &nbsp; <?= $no_dokumen; ?></label>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="judul" class="col-md-2 col-form-label">Tanggal Surat</label>
                                            <label for="" class="col-form-label">: &nbsp; <?= $judul; ?></label>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <label for="" class="col-form-label">: &nbsp; <?= $keterangan; ?></label>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="file_pdf" class="col-md-2 col-form-label">File Surat</label>
                                            <a href="download_pdf.php?id_stk=<?= $id_stk; ?>" target="_blank">: &nbsp; <i class="la la-file-pdf-o"></i> <?= $file_pdf; ?></a>
                                        </div>

                                        <div class="form-group row float-right">
                                            <div class="col-sm-5 mb-2 mr-2">
                                                <a href="data_stk.php" class="btn btn-default p-2 float-right"> <i class="la la-arrow-left"></i> Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright ml-auto">
                    Copyright © 2021. All rights reserved.
                </div>
            </div>
        </footer>
    </div>
    </div>
</body>
<script src="../../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../../assets/js/core/popper.min.js"></script>
<script src="../../../assets/js/core/bootstrap.min.js"></script>
<script src="../../../assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../../../assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src=".././../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../../assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../../../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../../assets/js/ready.min.js"></script>
<script src="../../../assets/js/demo.js"></script>
<script src="../../../DataTables-1.11.2/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: "linked",
            language: "id",
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>

</html>