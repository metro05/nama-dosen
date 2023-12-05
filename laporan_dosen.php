<?php 
    // include 'authentikasi.php';
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");      
    // membuat nama file ekspor "data-anggota.xls"
    header("Content-Disposition: attachment; filename=mahasiswa.xls"); 
?>
<html>
    <head>
        <title>Laporan Mahasiswa</title>
    </head>
    <body>
        <table border ="1" width="100%">
            <tr style="background: yellow   ;">
                <td>Id_dosen</td>
                <td>Nama_Dosen</td>
                <td>Almat</td>
                <td>keterangan</td>
                <td>Foto</td>
            </tr>
            <?php
            include 'koneksi.php';
            $koneksi = mysqli_connect("localhost", "root", "");
            mysqli_select_db($koneksi,"kuliah_pwl_b");
            $data = mysqli_query($koneksi, "select * from tb_dosen");
            while($dt = mysqli_fetch_array($data)){ ?>
            <tr>
                <td width="30%"><?php echo $dt['id_dosen']?></td>
                <td><?php echo $dt['nama_dosen']?></td>
                <td><?php echo $dt['alamat']?></td>
                td><?php echo $dt['keterangan']?></td>
                <td><?php echo $dt['foto']?></td>
            </tr>
            <?php } ?>
    </table>
    </body>
</html>