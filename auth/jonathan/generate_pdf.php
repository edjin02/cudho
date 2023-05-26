<?php
require('C:\xampp\htdocs\fpdf185\fpdf.php');
require('connection.php');

class PDF extends FPDF{
    
    function Header(){
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(130,10,'City Urban Development and Housing Office',1,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$db = new dbObj();
$connString =  $db->getConnstring();

$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$address = $_POST['address'];

$result = mysqli_query($connString, "SELECT id, househeadname, gender, monthly, samahan, spouse, s_gender FROM testreport WHERE birthdatesample BETWEEN '$startdate' AND '$enddate' AND address LIKE '%$address%'") or die("database error:". mysqli_error($connString));

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$col_widths = array(14, 55, 18, 35, 82, 55, 18);

$pdf = new PDF('L');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',9);

// Output header


$pdf->Ln();

foreach ($data as $row) {
    $pdf->Cell($col_widths[0], 9.5, $row['id'], 1,0,'C');
    $pdf->Cell($col_widths[1], 9.5, $row['househeadname'], 1,0,'C');
    $pdf->Cell($col_widths[2], 9.5, $row['gender'], 1,0,'C');
    $pdf->Cell($col_widths[3], 9.5, $row['monthly'], 1,0,'C');
    $pdf->Cell($col_widths[4], 9.5, $row['samahan'], 1,0,'C');
    $pdf->Cell($col_widths[5], 9.5, $row['spouse'], 1,0,'C');
    $pdf->Cell($col_widths[6], 9.5, $row['s_gender'], 1,0,'C');
    $pdf->Ln();
}

$pdf->Output();

?>