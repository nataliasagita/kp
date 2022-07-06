<?php
include '../../../koneksi.php';
include '../jumlah_data.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>STK | E-Arsip - QM Pertamina RU III</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../../assets/img/logo-pertamina.png">
    <link rel="stylesheet" href="../../../datatables.min.css">
    <link rel="stylesheet" href="../../../sweetalert2-11.1.5/dist/sweetalert2.min.css">
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
                        <a href="../index.php">
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
                            <a href="data_stk.php" class="active bg-active">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>STK</span>
                                <span class="badge badge-success"><?= $jumlah_stk; ?></span>
                            </a>
                            <a href="../iso/data_iso.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>ISO</span>
                                <span class="badge badge-success">908088</span>
                            </a>
                            <a href="../surat-perintah/data_sp.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Surat Perintah</span>
                                <span class="badge badge-success"><?= $jumlah_sp; ?></span>
                            </a>
                            <a href="../surat-keputusan/data_sk.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Surat Keputusan</span>
                                <span class="badge badge-success"><?= $jumlah_sk; ?></span>
                            </a>
                            <a href="../kebijakan/data_kebijakan.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Kebijakan</span>
                                <span class="badge badge-success"><?= $jumlah_kebijakan; ?></span>
                            </a>
                            <a href="../rtm/data_rtm.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>RTM</span>
                                <span class="badge badge-success"><?= $jumlah_rtm; ?></span>
                            </a>
                            <a href="../cip/data_cip.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>CIP</span>
                                <span class="badge badge-success"><?= $jumlah_cip; ?></span>
                            </a>
                            <a href="../komet/data_komet.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>KOMET</span>
                                <span class="badge badge-success"><?= $jumlah_komet; ?></span>
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
                                <span>Jenis Dokumen</span>
                            </a>
                            <a href="#">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Bagian / Fungsi</span>
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
                            <h4 class="page-title font-weight-bold">Data STK</h4>
                        </div>
                        <div class="col-md-6 col-4 align-self-center">
                            <a href="tambah.php" class="btn btn-sm pull-right btn-primary"><i class="la la-plus font-weight-bold"></i> &nbsp;Tambah Dokumen</a>
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
                                                    <th>Bagian</th>
                                                    <th>Jenis</th>
                                                    <th>No Dokumen</th>
                                                    <th>Judul</th>
                                                    <th>TMT Berlaku</th>
                                                    <th>Kadaluarsa</th>
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
                                                        <td><?= $data['bagian']; ?></td>
                                                        <td><?= $data['jenis']; ?></td>
                                                        <td><?= $data['no_dokumen']; ?></td>
                                                        <td><?= $data['judul']; ?></td>
                                                        <td><?= $data['tmt_berlaku']; ?></td>
                                                        <td <?php
                                                            $tanggal_sekarang = date("Y-m-d");
                                                            if ($tanggal_sekarang <= $data['kadaluarsa']) {
                                                                echo "class='table-success'";
                                                            } else {
                                                                echo "class='table-danger'";
                                                            }
                                                            ?>>
                                                            <?= $data['kadaluarsa']; ?>
                                                        </td>
                                                        <td>
                                                            <a href="detail.php?id_stk=<?= $data["id_stk"]; ?>" class="btn btn-primary p-1 mr-1 mb-1">
                                                                <i class="la la-info-circle"></i>
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