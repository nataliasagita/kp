<?php
include '../../../koneksi.php';
include '../jumlah_data.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Buku Surat Masuk | E-Book Disposisi</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../../assets/img/logo.png">
    <link rel="stylesheet" href="../../../datatables.min.css">
    <link rel="stylesheet" href="../../../sweetalert2-11.1.5/dist/sweetalert2.min.css">
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
					<li class="nav-item">
						<a href="tambah.php">
							<i class="la la-keyboard-o"></i>
							<p>Forms</p>
						</a>
					</li>
					<li class="nav-item active bg-active">
						<a href="#">
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
                            <h4 class="page-title font-weight-bold">Data Surat Masuk</h4>
                        </div>
                        <div class="col-md-6 col-4 align-self-center">
                            <a href="export.php" class="btn pull-right btn-success ml-2 mr-0">Eksport Data</a>
                            <a href="tambah.php" class="btn pull-right btn-primary"><i class="la la-plus font-weight-bold"></i> &nbsp;Tambah Dokumen</a>
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
                                                    <th>No Urut</th>
                                                    <th>No Surat</th>
                                                    <th>Asal Surat</th>
                                                    <th>Tanggal Diterima</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $hasil = mysqli_query($koneksi, "SELECT*FROM tb_stk");
                                                while ($data = mysqli_fetch_array($hasil)) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no; ?></td>
                                                        <td><?= $data['jenis']; ?></td>
                                                        <td><?= $data['kategori']; ?></td>
                                                        <td><?= $data['no_dokumen']; ?></td>
                                                        <td><?= $data['judul']; ?></td>
                                                        <td><?= $data['keterangan']; ?></td>
                                                        <td>
                                                            <a href="detail.php?id_stk=<?= $data["id_stk"]; ?>" class="btn btn-primary p-1 mr-1 mb-1">
                                                                <i class="la la-info-circle"></i>
                                                            </a>
                                                            <a href="lembardisposisi.php?id_stk=<?= $data["id_stk"]; ?>" class="btn btn-info p-1 mr-1 mb-1">
                                                                <i class="la la-download"></i>
                                                            </a>
                                                            <a href="edit.php?id_stk=<?= $data["id_stk"]; ?>" class="btn btn-warning p-1 mr-1 mb-1">
                                                                <i class="la la-edit"></i>
                                                            </a>
                                                            <a href="delete.php?id_stk=<?= $data["id_stk"]; ?>" class="delete btn btn-danger p-1 mr-1 mb-1" onclick="alertHapus()">
                                                                <i class="la la-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php $no++;
                                                } ?>
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
<script>
    $(document).ready(function() {
        $('#tabelDokumen').DataTable();
    });
</script>
<script src="../../../sweetalert2-11.1.5/dist/sweetalert2.all.min.js"></script>
<script>
    $('.delete').on('click', function(e) {
        e.preventDefault();
        let self = $(this);
        console.log(self.data('title'));
        Swal.fire({
            title: 'Yakin untuk menghapus data ini?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
                setTimeout(() => {
                    Swal.fire(
                        'Terhapus!',
                        'Data berhasil dihapus.',
                        'success'
                    )
                }, 10);
                setTimeout(() => {
                    location.href = self.attr('href');
                }, 3000);
            }
        })
    })
</script>

</html>