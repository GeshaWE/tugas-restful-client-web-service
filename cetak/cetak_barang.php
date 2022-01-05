<?php
require 'fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=sparepart_motor','root','');

class myPDF extends FPDF{
    function header()
    {
        $this->SetFont('Times','B',16);
        $this->Cell(185,5,'TUGAS RESTFUL CLIENT',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',11);
        $this->Cell(185,10,'Sparepart Sepeda Motor 2022',0,0,'C');
        $this->Ln(20);
        $this->SetFont('Times','',12);
        $this->Cell(35,10,'Laporan Data Barang',0,0,'C');
        $this->Ln(10);
    }
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page'.$this->PageNO().'/{nb}',0,0,'C');
    }

    function HeaderTabel()
    {
        $this->SetFont('Times','B',12);
        $this->Cell(40,10,'ID',1,0,'C');
        $this->Cell(60,10,'Nama Barang',1,0,'C');
        $this->Cell(40,10,'Harga',1,0,'C');
        $this->Ln();
    }

    function ViewTabel($db)
    {
        $this->SetFont('Times','',12);
        include 'koneksi.php';
        $product = mysqli_query($connect, "select * from product");
        while($data = mysqli_fetch_array($product))
        {
            $this->Cell(40,10,$data['id'],1,0,'L');
            $this->Cell(60,10,$data['nama_barang'],1,0,'L');
            $this->Cell(40,10,$data['harga'],1,0,'L');
            $this->Ln();
        }
    }
}

$pdf = new myPDF;
$pdf->AliasNBPages();
$pdf->AddPage('P','A4','0');
$pdf->HeaderTabel();
$pdf->ViewTabel($db);
$pdf->Output();