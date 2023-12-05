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
                <td>id_jurusan</td>
                <td>nama_jurusan</td>
                <td>akreditas</td>
            </tr>
            <?php
            include 'koneksi.php';
            $koneksi = mysqli_connect("localhost", "root", "");
            mysqli_select_db($koneksi,"kuliah_pwl_b");
            $data = mysqli_query($koneksi, "select * from tb_jurusan");
            while($dt = mysqli_fetch_array($data)){ ?>
            <tr>
                <td width="30%"><?php echo $dt['id_jurusan']?></td>
                <td><?php echo $dt['nama_jurusan']?></td>
                <td><?php echo $dt['akreditas']?></td>
            </tr>
            <?php } ?>
    </table>
    </body>
</html>