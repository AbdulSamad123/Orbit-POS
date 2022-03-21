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
$select = "SELECT shipper.name,booking.vessel,booking.voyage,booking.roe,booking.container_number,booking.hbl,booking.volume,booking.gross_weight,booking.net_weight,booking.agreed_rate,booking.ocean_freight,booking.exwork,booking.bl,booking.do,booking.thc,booking.round_amount FROM shipper JOIN booking ON shipper.id = booking.shipper where booking.id='$id'";
$result = mysqli_query($conn ,$select);
if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result)){
                     $shipper = $row['name'];
                //   $consignee = $row['Consignee'];
                //   $notify_party = $row['Notify_Party'];
                //   $Pre_Carriage_by = $row['Pre_Carriage_by'];
                //   $Place_of_receipt = $row['Place_of_receipt'];
                //   $Vessel = $row['Vessel'];
                //   $Voy_No = $row['Voy_No'];
                //   $BL_No = $row['B/L_No'];
                //   $Port_of_Loading = $row['Port_of_Loading'];
                //   $Port_of_Discharge = $row['Port_of_Discharge'];                
                //   $Place_of_Delievery = $row['Place_of_Delievery'];                
                //   $Final_Destination = $row['Final_Destination'];                
                //   $Container_No = $row['Container_No'];                
                //   $Seal_No = $row['Seal_No'];                
                //   $Marks = $row['Marks'];                
                //   $Numbers = $row['Numbers'];                
                //   $No_of_Container_or_Pkgs = $row['No_of_Container_or_Pkgs'];                
                //   $gross_weight = $row['Gross_Weight'];                
                //   $Measurments = $row['Measurments'];                
                //   $Kind_of_Packages = $row['Kind_of_Packages'];                
                //   $Description_of_Goods = $row['Description_of_Goods'];                
                //   $Total_Number_of_Containers = $row['Total_Number_of_Containers'];                
                //   $Merchant_Declared_Value = $row['Merchant_Declared_Value'];                
                //   $Freight_and_Charges = $row['Freight_and_Charges'];                
                //   $Revenue_Tons = $row['Revenue_Tons'];                
                //   $Rate = $row['Rate'];                
                //   $Per = $row['Per'];                
                //   $Prepaid_1 = $row['Prepaid_1'];                
                //   $Collect = $row['Collect'];                
                //   $Exchange_Rate = $row['Exchange_Rate'];                
                //   $Prepaid_2 = $row['Prepaid_2'];                
                //   $Payable_at = $row['Payable_at'];    
                //   $Total_Prepaid_in_local_Currency = $row['Total_Prepaid_in_local_Currency'];    
                //   $No_of_Original = $row['No_of_Original_BsL'];    
                //   $Place_of_issue = $row['place_of_issue'];    
                //   $date_of_issue = $row['date_of_issue'];    
                //   $As_Carrier = $row['As_Carrier'];


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
            <td>BL# Y21042090 </td>
            <td style="font-size:12px;border-right:none">Index No.</td>
            <td style="font-size:12px;border-left:none;" colspan="2">Volume:</td>
        </tr>

        <tr>
            <td>Vessel: OOCL sind V.111S</td>
            <td style="font-size:12px;border-right:none">G. Weight: 26442.00 kg</td>
            <td style="font-size:12px;border-left:none;" colspan="2">Net Weight: 26442.00 kg</td>
        </tr>

        <tr>

            <td>Commodity : LS</td>
            <td style="font-size:12px;" colspan="3">Origin: XINGANG</td>

        </tr>

        <tr>
            <td>Package: 1170 CARTONS</td>
            <td style="font-size:12px;" colspan="3">Discharge: KARACHI</td>
        </tr>

        <tr>
            <td>Cont No. BMOU2790</td>
            <td style="font-size:12px;border-right:none">Freight Status</td>
            <td style="font-size:12px;border-left:none;border-right:none" >Prepaid</td>
            <td style="font-size:12px;border-left:none;" >Exch.Rate: 164.50</td>
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
            <td width="130" align="center" style="font-size:12px">2575 USD</td>
            <td width="130" align="right" style="font-size:12px">423588.00</td>
        </tr>

        <tr>
            <td width="90" align="right" style="font-size:12px">2</td>
            <td width="370" align="left" style="font-size:12px">HANDLING CHARGES </td>
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
