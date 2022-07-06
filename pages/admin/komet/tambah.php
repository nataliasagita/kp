<?php
include '../../../koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Tambah Data KOMET | E-Arsip - QM Pertamina RU III</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../../assets/img/logo-pertamina.png">
    <link rel="stylesheet" href="../../../datatables.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="../index.php" class="logo">
                    &nbsp;
                    <img src="../../../assets/img/logo-pertamina-teks.png" alt="" width="160px">
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
                                <img src="../../../assets/img/profile.jpg" alt="user-img" width="36" class="img-circle">
                                <span class="text-white">Ahmad Sabili</span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img">
                                            <img src="../../../assets/img/profile.jpg" alt="user">
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
                    <li class="nav-item collapse">
                        <a class="collapse-toggle" data-toggle="collapse" href="#collapseDokumen" aria-expanded="true">
                            <i class="la la-file-text"></i>
                            <p>Dokumen</p>
                            <span class="badge">
                                <span class="la la-caret-down"></span>
                            </span>
                        </a>
                        <div class="collapse in" id="collapseDokumen" aria-expanded="true">
                            <a href="data_stk.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>STK</span>
                                <span class="badge badge-success">23562</span>
                            </a>
                            <a href="../iso/data_iso.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>ISO</span>
                                <span class="badge badge-success">1562</span>
                            </a>
                            <a href="../surat-perintah/data_sp.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Surat Perintah</span>
                                <span class="badge badge-success">362</span>
                            </a>
                            <a href="data_sk.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Surat Keputusan</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../kebijakan/data-kebijakan.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Kebijakan</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../rtm/data_rtm.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>RTM</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../cip/data_cip.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>CIP</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="data_komet.php" class="active bg-active">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>KOMET</span>
                                <span class="badge badge-success">17</span>
                            </a>
                        </div>
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
                                <span>Bagian</span>
                            </a>
                            <a href="#">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Jenis Dokumen</span>
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
                            <h4 class="page-title font-weight-bold">Tambah Data KOMET</h4>
                        </div>
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <input type="hidden" value="<?php echo $data['id_komet']; ?>" name="id_komet">
                                        <div class="form-group form-inline">
                                            <label for="judul" class="col-md-2 col-form-label">Judul</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full" id="judul" name="judul" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="narasumber" class="col-md-2 col-form-label">Narasumber</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full" id="narasumber" name="narasumber" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="no_pekerja" class="col-md-2 col-form-label">No Pekerja</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full" id="no_pekerja" name="no_pekerja" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="fungsi" class="col-md-2 col-form-label">Fungsi</label>
                                            <div class="col-md-10 p-0">
                                                <select class="form-control" id="fungsi" name="fungsi">
                                                    <?php
                                                    $sql = mysqli_query($koneksi, "SELECT*FROM tb_bagian");
                                                    while ($data = mysqli_fetch_array($sql)) {
                                                    ?>
                                                        <option value="<?= $data['nama_bagian']; ?>"><?= $data['nama_bagian']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="bagian" class="col-md-2 col-form-label">Bagian</label>
                                            <div class="col-md-10 p-0">
                                                <select class="form-control" id="bagian" name="bagian">
                                                    <?php
                                                    $sql = mysqli_query($koneksi, "SELECT*FROM tb_bagian");
                                                    while ($data = mysqli_fetch_array($sql)) {
                                                    ?>
                                                        <option value="<?= $data['nama_bagian']; ?>"><?= $data['nama_bagian']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="tanggal" class="col-md-2 col-form-label">Tanggal</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full datepicker" id="tanggal" name="tanggal" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="file_pdf" class="col-md-2 col-form-label">Upload file PDF</label>
                                            <div class="col-md-10 p-0">
                                                <input type="file" class="form-control-file" id="" name="file_pdf">
                                            </div>
                                        </div>
                                        <div class="form-group row float-right">
                                            <div class="col-sm-5 mb-2 mr-2">
                                                <a href="data_sk.php" class="btn btn-danger p-2 float-right">Batal</a>
                                            </div>
                                            <div class="col-sm-5 ml-2 mr-1">
                                                <button type="submit" class="btn btn-primary p-2 float-right" value="simpan">Simpan data</button>
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