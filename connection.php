<?php

class functions
 {
    function con()
    {
        session_start();
        $conn = $_SESSION['conn'] = mysqli_connect( 'localhost', 'root', '', 'shipping' );
    }

    function login( $email, $pass )
    {
        $conn = $_SESSION['conn'];
        $insert = mysqli_query( $conn, "select * from user where email='".$email."' AND password='".$pass."'" ) or die(mysql_error());
        $num = mysqli_num_rows( $insert );
        if ($num>0)
       {
            $_SESSION['email'] = $email;
            header( 'location:index.php' );

        }
    }

    function add_shipper($name, $address, $email, $contact, $ntn)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into shipper values('$id','$name','$address','$email','$contact','$ntn');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Shipper Added'); </script>";
        }
    }

    function add_consignee($name, $address, $email, $contact, $ntn)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into consignee values('$id','$name','$address','$email','$contact','$ntn');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Consignee Added'); </script>";
        }
    }
   
    function add_agent($name, $address, $email, $contact, $ntn)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into agent values('$id','$name','$address','$email','$contact','$ntn');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Agent Added'); </script>";
        }
    }

    function add_client($name, $address, $email, $contact, $ntn)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into client values('$id','$name','$address','$email','$contact','$ntn');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Agent Added'); </script>";
        }
    }

    function add_coloader($name, $address, $email, $contact, $ntn)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into coloader values('$id','$name','$address','$email','$contact','$ntn');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Coloader Added'); </script>";
        }
    }

    function add_pol($name)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into pol values('$id','$name');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Pol Added'); </script>";
        }
    }

    function add_pod($name)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into pod values('$id','$name');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Pod Added'); </script>";
        }
    }

    function add_currency($name)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into currency values('$id','$name');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Currency Added'); </script>";
        }
    }
    
    function add_booking($shipper,$client,$consignee,$pol,$pod,$cuttof,$eta,$etd,$vessel,$voyage,$coloader,$agent,$buying,$selling,$roe,$currency,$profit,$mode,$sales_person,$destufing_yard,$container_number,$mbl_status,$hbl_status,$submission_manifest,$arrival_notice,$collection_do,$type,$hbl,$mbl,$volume,$gross_weight,$net_weight,$agreed_rate,$exwork,$ocean_freight,$bl,$do,$thc,$round_amount,$agree_rate_coloader,$dn_charges,$of_charges,$thc_coloader,$docs_charges,$net_profit)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into booking values('$id','$shipper','$client','$consignee','$pol','$pod','$cuttof','$eta','$etd','$vessel','$voyage','$coloader','$agent','$buying','$selling','$roe','$currency','$profit','$mode','$sales_person','$destufing_yard','$container_number','$mbl_status','$hbl_status','$submission_manifest','$arrival_notice','$collection_do','$type','$hbl','$mbl','$volume','$gross_weight','$net_weight','$agreed_rate','$exwork','$ocean_freight','$bl','$do','$thc','$round_amount','$agree_rate_coloader','$dn_charges','$of_charges','$thc_coloader','$docs_charges','$net_profit');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Booking Added'); </script>";
        }
    }

 }
?>