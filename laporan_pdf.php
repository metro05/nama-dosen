<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times New Roman','B',26);
$pdf->Cell(140,10,'Laporan Data Mahasiswa',0,1,'L');
$pdf->Cell(140,10,'',0,1,'R');

$pdf->SetFont('Arial','B',16);
$pdf->cell(20,10,'No',1,0,'C');
$pdf->cell(50,10,'NPM',1,0,'C');
$pdf->cell(120,10,'Nama',1,0,'C');
$pdf->cell(100,10,'Alamat',1,1,'C');
$pdf->cell(120,10,'Jenis Kelamin',1,0,'C');
$pdf->cell(100,10,'No Telp',1,1,'C');
include 'koneksi.php';
$no = 1;
$query = mysqli_query($koneksi,"Select * from tb_mahasiswa");
while($dt = mysqli_fetch_array($query)){
    $pdf->cell(20,10,$no++ ,1,0,'C');
    $pdf->cell(50,10,$dt['NPM'],1,0,'C');
    $pdf->cell(120,10,$dt['Nama_Mahasiswa'],1,0,'C');
    $pdf->cell(100,10,$dt['Alamat_Mahasiswa'],1,1,'C');
    $pdf->cell(120,10,$dt['JK'],1,0,'C');
    $pdf->cell(100,10,$dt['no_telp'],1,1,'C');
}

$pdf->Output();
?>