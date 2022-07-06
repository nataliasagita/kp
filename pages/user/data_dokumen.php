<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dokumen | E-Arsip QM Pertamina RU III</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../../assets/css/ready.css">
	<link rel="stylesheet" href="../../assets/css/demo.css">
	<link rel="stylesheet" href="../../assets/css/costum.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
	<link rel="icon" href="../../assets/img/logo-pertamina.png">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					&nbsp;
					<img src="../../assets/img/logo-pertamina-teks.png" alt="" width="160px">
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
								<img src="../../assets/img/profile.jpg" alt="user-img" width="36" class="img-circle">
								<span class="text-white">Ahmad Sabili</span>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img">
											<img src="../../assets/img/profile.jpg" alt="user">
										</div>
										<div class="u-text">
											<h4>Hizrian</h4>
											<p class="text-muted">hello@themekita.com</p>
											<a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<i class="la la-user"></i>
									&nbsp; My Profile
								</a>
								<a class="dropdown-item" href="#"></i> My Balance</a>
								<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<i class="la la-cog"></i>
									&nbsp; Account Setting
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<i class="la la-power-off"></i>
									&nbsp; Logout
								</a>
							</ul>
							<!-- /.dropdown-user -->
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar">
			<div class="scrollbar-inner sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item">
						<a href="index.html">
							<i class="la la-dashboard"></i>
							<p>Dashboard</p>
							<!-- <span class="badge badge-count">5</span> -->
						</a>
					</li>
                    <li class="nav-item active bg-active">
						<a href="data_dokumen.html">
							<i class="la la-file-text"></i>
							<p>Dokumen</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="forms.html">
							<i class="la la-keyboard-o"></i>
							<p>Forms</p>
							<span class="badge badge-count">50</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="tables.html">
							<i class="la la-th"></i>
							<p>Tables</p>
							<span class="badge badge-count">6</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="typography.html">
							<i class="la la-font"></i>
							<p>Typography</p>
							<span class="badge badge-danger">25</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="icons.html">
							<i class="la la-fonticons"></i>
							<p>Icons</p>
						</a>
					</li>
					<li class="nav-item collapse">
						<a class="collapse-toggle" data-toggle="collapse" href="#collapseSetup" aria-expanded="true">
							<i class="la la-cogs"></i>
							<p>Setup</p>
							<span class="badge">
								<span class="la la-caret-down"></span>
							</span>
						</a>
						<div class="collapse in" id="collapseSetup" aria-expanded="true">
							<a href="#">
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<span class="la la-caret-right"></span>
								&nbsp;
								<span>User</span>
							</a>
							<a href="#">
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<span class="la la-caret-right"></span>
								&nbsp;
								<span>Jenis Dokumen</span>
							</a>
							<a href="#">
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<span class="la la-caret-right"></span>
								&nbsp;
								<span>Memorandum</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-md-6 col-8 align-self-center">
                            <h4 class="page-title font-weight-bold">Data Dokumen</h4>
                        </div>
                        <div class="col-md-6 col-4 align-self-center">
                            <a href="#" class="btn btn-sm pull-right btn-primary"><i class="la la-plus font-weight-bold"></i> &nbsp;Tambah Dokumen</a>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="tabelDokumen">
                                            <thead class="font-weight-bold">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Dokumen</th>
                                                    <th>Jenis</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>Tanggal Upload</th>
													<th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>SFAD/ADADD2/2021</td>
                                                    <td>Surat Keputusan</td>
                                                    <td>Pergantian Jabatan Staf</td>
                                                    <td>2021-09-07</td>
                                                    <td>2021-09-10</td>
													<td>
														<a href="" class="btn btn-warning p-1 mr-1 mb-1">
                                                        	<i class="la la-info-circle"></i>
															<span>Detail</span>
                                                    	</a>
													</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>SFAD/ADADD2/2021</td>
                                                    <td>Surat Tata Kerja (STK)</td>
                                                    <td>Pergantian Jabatan Staf</td>
                                                    <td>2021-09-07</td>
                                                    <td>2021-09-08</td>
                                                    <td>
														<a href="" class="btn btn-warning p-1 mr-1 mb-1">
                                                        	<i class="la la-info-circle"></i>
															<span>Detail</span>
                                                    	</a>
													</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
					2021, made with <i class="la la-heart heart text-danger"></i> by Ahmad Sabili
				</div>				
			</div>
		</footer>
	</div>
</div>
</body>
<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="../../assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../../assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../assets/js/ready.min.js"></script>
<script src="../../assets/js/demo.js"></script>
<script src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#tabelDokumen').DataTable();
} );
</script>
</html>