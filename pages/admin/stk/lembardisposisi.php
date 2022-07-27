<?php

include '../../../koneksi.php';
require '../../../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html = '<style>
.judul {
    text-align: center;
    padding-top: 0;
}
td{
    padding-left: 25px;
}
table,tr {
    margin-left: 30px;
    margin-right: 25px;
    line-height: 30px:
    border-collapse:collapse;
    border: 1px solid #999;
}
</style>
<img src="../../../assets/img/kop.jpg" style="height:120px">';

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

$html .='
<h3 class="judul">LEMBAR DISPOSISI</h3>
<table width="100%">
    <tr>
        <td width="18%">Surat dari</td>
        <td width="4%">:</td>
        <td width="30%">'. $kategori .'</td>
        <td width="18%">Diterima tgl</td>
        <td width="4%">:</td>
        <td width="30%">'. $no_dokumen .'</td>
    </tr>
    <tr>
        <td>Nomor Surat</td>
        <td>:</td>
        <td>'. $jenis .'</td>
        <td>No. Agenda</td>
        <td>:</td>
        <td>'. $id_stk .'</td>
    </tr>
    <tr>
        <td>Tgl. Surat</td>
        <td>:</td>
        <td>'. $judul .'</td>
        <td>Sifat</td>
        <td>:</td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td colspan="3">Sangat segera Segera Rahasia</td>
    </tr>
    <tr>
        <td>Perihal :</td>
        <td colspan="5">'. $keterangan .'</td>
    </tr>
    <tr>
        <td colspan="6" height="30px"></td>
    </tr>
    <tr>
        <td colspan="3">Diteruskan Kepada sdr :</td>
    </tr>
    <tr>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Seketariat</td>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Anggapan dan saran</td>
    </tr>
    <tr>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Bidang Data & Informasi Publik</td>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Proses lebih lanjut</td>
    </tr>
    <tr>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Bidang Telematika</td>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Koordinasi/Konformasi</td>
    </tr>
    <tr>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Bidang Komunikasi Publik</td>
        <td colspan="3">......................................</td>
    </tr>
    <tr>
        <td colspan="3"><img src="../../../assets/img/box.jpg" width="20" height="12"> Bidang Persandian</td>
        <td colspan="3">......................................</td>
    </tr>
    <tr>
        <td colspan="3" height="15px">Dari Seterusnya.....</td>
        <td colspan="3">......................................</td>
    </tr>
    <tr>
        <td colspan="6" height="40px"></td>
    </tr>
    <tr>
        <td colspan="6">Catatan :</td>
    </tr>
    <tr>
        <td colspan="6" height="300px"></td>
    </tr>
</table>';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');

$dompdf->render();
$dompdf->stream("Disposisi.pdf", array("Attachment"=>0));
?>