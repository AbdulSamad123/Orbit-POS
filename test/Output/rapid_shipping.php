<?php
include '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 10,
    'margin_bottom' => 10,
    'format' => [230, 300]
]);

$html = '
	<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
p {
    font-family:calibri;
    font-size:12px;    
}

</style>
</head>
<body>
    <p style="position:absolute;top:50px">Shipper</p>    
    <p style="position:absolute;top:50px;right:50px">Bill of landing no</p>    
    <p style="position:absolute;top:190px">Consignee</p>    
    <p style="position:absolute;top:320px">Notify Party</p>    
    <p style="position:absolute;top:320px;right:350px">Notify Party (2nd)</p>    
    <p style="position:absolute;top:440px;">For delievery apply to</p>    
    <p style="position:absolute;top:580px;">Port of Loading</p>    
    <p style="position:absolute;top:580px;left:200px">Port of Loading</p>    
    <p style="position:absolute;top:580px;left:360px">Ocean Vessel</p>    
    <p style="position:absolute;top:640px;left:200px;">Port of Discharge</p>    
    <p style="position:absolute;top:640px;left:360px;">Final Destination</p>    
    <p style="position:absolute;top:660px;left:500">Freight</p>    
    <p style="position:absolute;top:730px;">Marks and Numbers</p>  
    <p style="position:absolute;top:730px;left:300px">Marks and Numbers</p>  
    <p style="position:absolute;top:730px;right:50px">Marks and Numbers</p>  
  
</body>

</html>


';
            
$mpdf-> writeHTML($html);
$mpdf-> output();
?>
