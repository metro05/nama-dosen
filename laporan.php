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
                <td>NPM</td>
                <td>Nama_Mahasiswa</td>
                <td>Alamat_Mahasiswa</td>
                <td>Jenis Kelamin</td>
                <td>Nomor Telepon</td>
                
            </tr>
            <?php
            include 'koneksi.php';
            $koneksi = mysqli_connect("localhost", "root", "");
            mysqli_select_db($koneksi,"kuliah_pwl_b");
            $data = mysqli_query($koneksi, "select * from tb_mahasiswa");
            while($dt = mysqli_fetch_array($data)){ ?>
            <tr>
                <td width="30%"><?php echo $dt['NPM']?></td>
                <td><?php echo $dt['Nama_Mahasiswa']?></td>
                <td><?php echo $dt['Alamat_Mahasiswa']?></td>
                <td><?php echo $dt['JK']?></td>
                <td><?php echo $dt['no_telp']?></td>
            </tr>
            <?php } ?>
    </table>
    </body>
</html>