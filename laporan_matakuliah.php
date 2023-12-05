<?php 
    // include 'authentikasi.php';
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");      
    // membuat nama file ekspor "data-anggota.xls"
    header("Content-Disposition: attachment; filename=mahasiswa.xls"); 
?>
<html>
    <head>
        <title>Laporan Matakuliah</title>
    </head>
    <body>
        <table border ="1" width="100%">
            <tr style="background: yellow   ;">
                <td>Id Matakuliah</td>
                <td>Nama Matakuliah</td>
                <td>Jumlah SKS</td>
                <td>Semester</td>
            </tr>
            <?php
            include 'koneksi.php';
            $koneksi = mysqli_connect("localhost", "root", "");
            mysqli_select_db($koneksi,"kuliah_pwl_b");
            $data = mysqli_query($koneksi, "select * from tb_matakuliah");
            while($dt = mysqli_fetch_array($data)){ ?>
            <tr>
                <td width="30%"><?php echo $dt['id_matakuliah']?></td>
                <td><?php echo $dt['nama_matakuliah']?></td>
                <td><?php echo $dt['jumlah_sks']?></td>
                <td><?php echo $dt['semester']?></td>
            </tr>
            <?php } ?>
    </table>
    </body>
</html>