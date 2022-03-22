<?php
include '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 20,
    'margin_bottom' => 10,
    'format' => 'A4'
]);

include "../connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$id = $_GET['id'];
$select = "SELECT shipper.name,pod.pod_name,booking.vessel,booking.voyage,booking.commodity,booking.packages,booking.roe,booking.container_number,booking.hbl,booking.volume,booking.gross_weight,booking.net_weight,booking.agreed_rate,booking.ocean_freight,booking.exwork,booking.bl,booking.do,booking.thc,booking.round_amount FROM booking JOIN shipper ON shipper.id = booking.shipper join pod on pod.id = booking.pod where booking.id='$id'";
$result = mysqli_query($conn ,$select);
if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result)){
                    $shipper = $row['name'];
                    $pod = $row['pod_name'];
                    $vessel = $row['vessel'];
                    $voyage = $row['voyage'];
                    $commodity = $row['commodity'];
                    $packages = $row['packages'];
                    $roe = $row['roe'];
                    $container_number = $row['container_number'];
                    $hbl = $row['hbl'];
                    $volume = $row['volume'];
                    $gross_weight = $row['gross_weight'];
                    $net_weight= $row['net_weight'];
                    $agreed_rate = $row['agreed_rate'];                
                    $ocean_freight = $row['ocean_freight'];                
                    $exwork = $row['exwork'];                
                    $bl = $row['bl'];                
                    $do = $row['do'];                
                    $thc = $row['thc'];                
                    $round_amount = $row['round_amount'];                

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

</style>
</head>
<body>  
    <h1 align="center" style="font-family:calibri">RAPID SHIPPING AND CARGO</h1>
    <p align="center" style="font-weight:bold;padding-top:-15px">Office No F95 central mall near gull plaza</p>
    <p align="center" style="font-weight:bold;padding-top:-10px">M.A Jinnah road Karachi Pakistan</p>
    <p align="center" style="font-weight:bold;padding-top:-10px">E-mail: hsumar@rsac.pk </p>
    <h2 align="center" style="font-family:calibri"><u>INVOICE</u></h2>

    <table border="0" style="border-collapse: collapse;" >
        <tr>
            <td width="380" rowspan="3"><b>Client: '.$shipper.'</b></td>
            <td width="150" style="font-size:12px;border-right:none">Invoice No.</td>
            <td width="90" style="font-size:12px;border-left:none;border-right:none">IMP-00991 </td>
            <td width="180" style="font-size:12px;border-left:none">Date:</td>
        </tr>
        <tr>
            <td style="font-size:12px;border-right:none">Job No.</td>
            <td style="font-size:12px;border-left:none" colspan="2">RSAC-XING-991</td>
        </tr>
        
        <tr>
            <td style="font-size:12px;border-right:none">IGM No.</td>
            <td style="font-size:12px;border-left:none;" colspan="2">Date:</td>
        </tr>

        <tr>
            <td>BL# '.$hbl.' </td>
            <td style="font-size:12px;border-right:none">Index No.</td>
            <td style="font-size:12px;border-left:none;" colspan="2">Volume:</td>
        </tr>

        <tr>
            <td>Vessel: '.$vessel.'-'.$voyage.'</td>
            <td style="font-size:12px;border-right:none">G. Weight: '.$gross_weight.'</td>
            <td style="font-size:12px;border-left:none;" colspan="2">Net Weight: '.$net_weight.'</td>
        </tr>

        <tr>

            <td>Commodity : '.$commodity.'</td>
            <td style="font-size:15px;" colspan="3">Origin: '.$pod.'</td>

        </tr>

        <tr>
            <td>Package: '.$packages.'</td>
            <td style="font-size:12px;" colspan="3">Discharge: KARACHI</td>
        </tr>

        <tr>
            <td>Cont No. '.$container_number.'</td>
            <td style="font-size:12px;border-right:none">Freight Status</td>
            <td style="font-size:12px;border-left:none;border-right:none" >Prepaid</td>
            <td style="font-size:12px;border-left:none;" >Exch.Rate: '.$roe.'</td>
        </tr>

    </table> 

    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td width="90" align="center"><b>S No .</b></td>
            <td width="370" align="center"><b>Description </b></td>
            <td width="130" align="center"><b>Amount(FC)</b></td>
            <td width="130" align="center"><b>Amount(RS)</b></td>
        </tr>
        
        <tr>
            <td width="90" align="right" style="font-size:12px">1</td>
            <td width="370" align="left" style="font-size:12px">OCEAN FREIGHT</td>
            <td width="130" align="center" style="font-size:12px">'.$ocean_freight.'</td>
            <td width="130" align="right" style="font-size:12px">423588.00</td>
        </tr>

        <tr>
            <td width="90" align="right" style="font-size:12px">2</td>
            <td width="370" align="left" style="font-size:12px">Exwork </td>
            <td width="130" align="center" style="font-size:12px">'.$exwork.'</td>
            <td width="130" align="right" style="font-size:12px"></td>
        </tr>

        <tr>
            <td width="90" height="18" align="right" style="font-size:12px">3</td>
            <td width="370" align="left" style="font-size:12px">Bl Charges</td>
            <td width="130" align="center" style="font-size:12px">'.$bl.'</td>
            <td width="130" align="right" style="font-size:12px"></td>
        </tr>

        <tr>
            <td width="90" height="18" align="right" style="font-size:12px">4</td>
            <td width="370" align="left" style="font-size:12px">DO Charges</td>
            <td width="130" align="center" style="font-size:12px">'.$do.'</td>
            <td width="130" align="right" style="font-size:12px"></td>
        </tr>

        <tr>
            <td width="90" height="18" align="right" style="font-size:12px">5</td>
            <td width="370" align="left" style="font-size:12px">Thc</td>
            <td width="130" align="center" style="font-size:12px">'.$thc.'</td>
            <td width="130" align="right" style="font-size:12px"></td>
        </tr>

        <tr>
            <td width="90" height="18" align="right" style="font-size:12px">6</td>
            <td width="370" align="left" style="font-size:12px">Round amount</td>
            <td width="130" align="center" style="font-size:12px"></td>
            <td width="130" align="right" style="font-size:12px">'.$round_amount.'</td>
        </tr>

        <tr>
            <td width="90" height="18" align="right" style="font-size:12px"></td>
            <td width="370" align="left" style="font-size:12px"></td>
            <td width="130" align="center" style="font-size:12px"></td>
            <td width="130" align="right" style="font-size:12px"></td>
        </tr>

        <tr>
            <td width="90" height="18" align="right" style="font-size:12px"></td>
            <td width="370" align="left" style="font-size:12px"></td>
            <td width="130" align="center" style="font-size:12px"></td>
            <td width="130" align="right" style="font-size:12px"></td>
        </tr>

        <tr>
            <td width="90" align="right" colspan="3" style="font-size:12px;border-bottom:none"><b>Total</b></td>
            <td width="" align="right" style="font-size:12px;border-bottom:none">427088.00</td>

        </tr>
        
        <tr>
            <td width="90" align="right" colspan="3" style="font-size:12px;border-top:none;border-bottom:none"><b>Received</b></td>
            <td width="" align="right" style="font-size:12px;border-top:none;border-bottom:none">0.00</td>

        </tr>

        <tr>
            <td width="90" align="right" colspan="3" style="font-size:12px;border-top:none"><b>Adjustment</b></td>
            <td width="" align="right" style="font-size:12px;border-top:none">0.00</td>

        </tr>
        <tr>

            <td width="90" align="left" colspan="2" style="font-size:12px;border-top:none"><b>In Words : FOUR LAC TWENTY SEVEN THOUSAND EIGHTY EIGHT ONLY/. </b></td>
            <td width="" align="right" style="font-size:12px;border-top:none"><b>Net Amount</b></td>
            <td width="" align="right" style="font-size:12px;border-top:none">427088.00</td>
        </tr>
    </table>

    <p style="padding-top:30px">For : <b>Rapid Shipping And Cargo</b></p>
    <p align="center" style="padding-top:50px"><b>Accounts Department Note : This Is computer generated invoice and does not need any signature.</b></p>
    <p align="center" style="padding-top:10px;font-size:25px">----------------------------------------------------------------------------------------</b></p>
    <p align="center" style="padding-top:-40px"><b>Please cut along the line</b></p>

</body>

</html>


';
}}           
$mpdf-> writeHTML($html);
$mpdf-> output();
?>
