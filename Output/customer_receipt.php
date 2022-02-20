<?php
include '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 40,
    'format' => 'A4'
]);

$html = '
	<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
p {
    font-family: Arial;
    font-size:11px;    
}
table {
    border-spacing: 0 15px;
}
td {
    padding: 5px;
}
</style>
</head>
<body>  
    <h1 align="center" style="font-family:calibri">RAPID SHIPPING AND CARGO</h1>
    <p align="center" style="font-weight:bold;padding-top:-15px">Office No F95 central mall near gull plaza</p>
    <p align="center" style="font-weight:bold;padding-top:-10px">M.A Jinnah road Karachi Pakistan</p>
    <p align="center" style="font-weight:bold;padding-top:-10px">E-mail: hsumar@rsac.pk </p>
    <h2 align="center" style="font-family:calibri"><u>Receipt</u></h2>

    <table border="0">
        <tr>
            <td width="100"><b>Refrence No.</b></td>
            <td width="400" style="font-size:15px;border-right:none">IMP-0102</td>
            <td width="50"><b>Date</b></td>
            <td style="font-size:15px;border-right:none">22/jan/2022</td>
        </tr>

        <tr>
            <td><b>Received With thanks from</b></td>
            <td style="font-size:15px;" colspan="2">Rapid Shipping and Cargo Rapid Shipping and Cargo</td>
        </tr>
        
        <tr>
            <td width="250"><b>the sum of</b></td>
            <td style="font-size:15px;" colspan="2">One hundred thousand five hundred ten rupees</td>
        </tr>

        <tr>
            <td width="100"><b>Pay Order / Cheque No</b></td>
            <td width="100" style="font-size:15px;border-right:none">duw899118999</td>
            <td width="200"><b>Pay Order / Cheque Date</b></td>
            <td style="font-size:15px;border-right:none">22/jan/2022</td>
        </tr>

        <tr>
            <td><b>Drawn Bank</b></td>
            <td style="font-size:15px;" colspan="2">Habib Metro Politon</td>
        </tr>

        <tr>
            <td><b>Against Bl number</b></td>
            <td style="font-size:15px;" colspan="2">Received payment against F2112034</td>
        </tr>

        <tr>
           <td><b>Remarks</b></td>
           <td style="font-size:15px;" colspan="2">Against D/O THC & Late D/O Charges</td>
        </tr>

         <tr>
           <td><b>PKR</b></td>
           <td style="font-size:15px;" colspan="2">78083939</td>
        </tr>

        <tr>
            <td><b>For</b></td>
            <td style="font-size:15px;" colspan="2">Rapid Shipping And Cargo</td>
        </tr>
        
        <tr>
            <td width="100" style="font-size:15px" colspan="2"></td>
            <td width="200" style="font-size:15px" colspan="2"><b>Hammad Summar</b></td>
        </tr>

        <tr>
            <td width="100" style="font-size:15px" colspan="2"></td>
            <td width="200" style="font-size:15px" colspan="2">_____________________________</td>
        </tr>

        <tr>
            <td width="100" style="font-size:15px" colspan="2"></td>
            <td width="200" style="font-size:15px" colspan="2">Account Department</td>
        </tr>

    </table> 

</body>

</html>


';
            
$mpdf-> writeHTML($html);
$mpdf-> output();
?>
