<?php
include '../../../koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Form Disposisi | E-Book Disposisi</title>
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
								<a class="dropdown-item" href="../login.php">
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
					<li class="nav-item active bg-active">
						<a href="#">
							<i class="la la-keyboard-o"></i>
							<p>Forms</p>
						</a>
					</li>
					<li class="nav-item">
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
                            <h4 class="page-title font-weight-bold">Form Disposisi</h4>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $data['id_stk']; ?>" name="id_stk">
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="jenis" class="col-md-2 col-form-label">Nomor Surat</label>
                                            <div class="col-md-10 p-0">
                                                <input class="form-control input-full" id="jenis" name="jenis" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="kategori" class="col-md-2 col-form-label">Asal Surat</label>
                                            <div class="col-md-10 p-0">
                                                <input class="form-control input-full" id="kategori" name="kategori" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="no_dokumen" class="col-md-2 col-form-label">Tanggal Diterima</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control datepicker" id="no_dokumen" name="no_dokumen" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="judul" class="col-md-2 col-form-label">Tanggal Surat</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control datepicker" id="judul" name="judul" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-10 p-0">
                                                <textarea type="text" class="form-control input-full" id="keterangan" name="keterangan" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="file_pdf" class="col-md-2 col-form-label">Upload file PDF (max. 2MB)</label>
                                            <div class="col-md-5 p-0">
                                                <input type="file" class="form-control-file" id="" name="file_pdf" required accept="application/pdf, .pdf">
                                            </div>
                                        </div>
                                        <div class="form-group row right">
                                            <div class="col-sm-10 mb-2 mr-1">
                                                <a href="data_anggota.php" class="btn btn-danger p-2 float-right">Batal</a>
                                            </div>
                                            <div class="col-sm-1 ml-2 mr-1">
                                                <button type="submit" name="submit" class="btn btn-primary p-2 float-right" value="simpan">Simpan data</button>
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