<?php
  if(isset($_POST['proses'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilai = $_POST['nilai'];

    if($nilai>=80){
        $status = "lulus";
        $huruf  = "A";
    }
    elseif($nilai>=70){
        $status = "lulus";
        $huruf  = "B";
    }
    elseif($nilai>=60){
        $status = "lulus";
        $huruf  = "C";
    }
    elseif($nilai>=50){
        $status = "kurang";
        $huruf  = "D";
    }
    elseif($nilai>=40){
        $status = "Tidak lulus";
        $huruf  = "E";
    }
       
    echo "Npm mahasiswa : ".$npm ."<br>";
    echo "Nama mahasiswa : ". $nama ."<br>";
    echo "Jurusan mahasiswa : ". $jurusan ."<br>";
    echo "Nilai mahasiswa : ". $nilai ."<br>";
    echo "Status kelulusan : ". $status ."<br>";
    echo "Nilai huruf : ". $huruf ."<br>";

  }
?>