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

    function add_pol($pol_name)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into pol values('$id','$pol_name');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Pol Added'); </script>";
        }
    }

    function add_pod($pod_name)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into pod values('$id','pod_$name');" ) or die(mysql_error());
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
    
    function add_booking($shipper,$client,$consignee,$pol,$pod,$cuttof,$eta,$etd,$vessel,$voyage,$commodity,$packages,$coloader,$agent,$buying,$selling,$roe,$currency,$profit,$mode,$sales_person,$destufing_yard,$container_number,$mbl_status,$hbl_status,$submission_manifest,$arrival_notice,$collection_do,$type,$hbl,$mbl,$volume,$gross_weight,$net_weight,$agreed_rate,$exwork,$ocean_freight,$bl,$do,$thc,$round_amount,$agree_rate_coloader,$dn_charges,$of_charges,$thc_coloader,$docs_charges,$net_profit)
    {
        $conn = $_SESSION['conn'];
        $id="";
        $insert = mysqli_query( $conn, "insert into booking values('$id','$shipper','$client','$consignee','$pol','$pod','$cuttof','$eta','$etd','$vessel','$voyage','$commodity','$packages','$coloader','$agent','$buying','$selling','$roe','$currency','$profit','$mode','$sales_person','$destufing_yard','$container_number','$mbl_status','$hbl_status','$submission_manifest','$arrival_notice','$collection_do','$type','$hbl','$mbl','$volume','$gross_weight','$net_weight','$agreed_rate','$exwork','$ocean_freight','$bl','$do','$thc','$round_amount','$agree_rate_coloader','$dn_charges','$of_charges','$thc_coloader','$docs_charges','$net_profit');" ) or die(mysql_error());
        if ( $insert )
        {
            echo "<script> alert('Booking Added'); </script>";
        }
    }


    function view_shipper()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from shipper' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_shipper.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_shipper.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function view_consignee()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from consignee' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_consignee.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_consignee.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function view_agent()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from agent');
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_agent.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_agent.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function view_client()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from client' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_client.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_client.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function view_coloader()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from coloader' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            echo '<td>' . $row[5] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_coloader.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_coloader.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function view_pol()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from pol' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_pol.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_pol.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function view_pod()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from pod' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_pod.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_pod.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    }

    function view_currency()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from currency' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_currency.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_currency.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    }

    function view_booking()
    {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from booking' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';            
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[28] . '</td>';
            echo '<td>' . $row[29] . '</td>';
            echo '<td>' . $row[30] . '</td>';
            echo '<td>' . $row[31] . '</td>';
            echo '<td>' . $row[32] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_booking.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_booking.php?id='.$row[0].'"> <i class="fas fa-trash"></i> </a> | <a href="output/invoice.php?id='.$row[0].'"> <i class="fas fa-file-invoice"></i> </a>' . '</td>';
            echo '</tr>';
        }
    } 

    function shipper()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from shipper");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
            extract($row);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }
    function consignee()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from consignee");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function agent()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from agent");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function client()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from client");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function coloader()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from coloader");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function pol()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from pol");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function pod()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from pod");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function currency()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from currency");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }

    function del_shipper()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from shipper where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewshipper.php");
        }
                
    }

    function del_consignee()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from consignee where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewconsignee.php");
        }
                
    }

    function del_agent()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from agent where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewagent.php");
        }
                
    }

    function del_client()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from client where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewclient.php");
        }
                
    }

    function del_coloader()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from coloader where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewcoloader.php");
        }
                
    }

    function del_pol()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from pol where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewpol.php");
        }
                
    }

    function del_pod()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from pod where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewpod.php");
        }
                
    }

    function del_currency()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from currency where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewcurrency.php");
        }
                
    }

    function del_booking()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from booking where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("location:viewbooking.php");
        }
                
    }

    function update_shipper($name,$address,$email,$contact,$ntn)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $address = $_POST['txtaddress'];
        $email = $_POST['txtemail'];
        $contact = $_POST['txtcon'];
        $ntn = $_POST['txtntn'];
        $insert = mysqli_query( $conn, "update shipper set name='".$name."', address='".$address."', email='".$email."',contact='".$contact."',ntn='".$ntn."'  where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewshipper.php');</script>";
        }
                
    }

    function update_agent($name,$address,$email,$contact,$ntn)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $address = $_POST['txtaddress'];
        $email = $_POST['txtemail'];
        $contact = $_POST['txtcon'];
        $ntn = $_POST['txtntn'];
        $insert = mysqli_query( $conn, "update agent set name='".$name."', address='".$address."', email='".$email."',contact='".$contact."',ntn='".$ntn."'  where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewagent.php');</script>";
        }
                
    }

    function update_consignee($name,$address,$email,$contact,$ntn)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $address = $_POST['txtaddress'];
        $email = $_POST['txtemail'];
        $contact = $_POST['txtcon'];
        $ntn = $_POST['txtntn'];
        $insert = mysqli_query( $conn, "update consignee set name='".$name."', address='".$address."', email='".$email."',contact='".$contact."',ntn='".$ntn."'  where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewconsignee.php');</script>";
        }
                
    }

    function update_client($name,$address,$email,$contact,$ntn)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $address = $_POST['txtaddress'];
        $email = $_POST['txtemail'];
        $contact = $_POST['txtcon'];
        $ntn = $_POST['txtntn'];
        $insert = mysqli_query( $conn, "update client set name='".$name."', address='".$address."', email='".$email."',contact='".$contact."',ntn='".$ntn."'  where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewclient.php');</script>";
        }
                
    }

    function update_coloader($name,$address,$email,$contact,$ntn)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $address = $_POST['txtaddress'];
        $email = $_POST['txtemail'];
        $contact = $_POST['txtcon'];
        $ntn = $_POST['txtntn'];
        $insert = mysqli_query( $conn, "update coloader set name='".$name."', address='".$address."', email='".$email."',contact='".$contact."',ntn='".$ntn."'  where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewcoloader.php');</script>";
        }
                
    }

    function update_pol($pol_name)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $pol_name = $_POST['txtname'];
        $insert = mysqli_query( $conn, "update pol set pol_name='".$pol_name."' where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewpol.php');</script>";
        }
                
    }

    function update_pod($pod_name)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $pod_name = $_POST['txtname'];
        $insert = mysqli_query( $conn, "update pod set pod_name='".$pod_name."' where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewpod.php');</script>";
        }
                
    }

    function update_currency($name)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['txtname'];
        $insert = mysqli_query( $conn, "update currency set name='".$name."' where id='".$id."'" );
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewcurrency.php');</script>";
        }
                
    }

    function update_booking($shipper,$client,$consignee,$pol,$pod,$cuttof,$eta,$etd,$vessel,$voyage,$coloader,$agent,$buying,$selling,$roe,$currency,$profit,$mode,$sales_person,$destufing_yard,$container_number,$mbl_status,$hbl_status,$submission_manifest,$arival_notice,$collection_do,$type,$hbl,$mbl,$volume,$gross_weight,$net_weight,$agreed_rate,$exwork,$ocean_freight,$bl,$do,$thc,$round_amount,$agree_rate_coloader,$dn_charges,$of_charges,$thc_coloader,$docs_charges,$net_profit)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $shipper=$_POST['shipper'];
        $client=$_POST['client'];
        $consignee=$_POST['consignee'];
        $pol=$_POST['pol'];
        $pod=$_POST['pod'];
        $cuttof=$_POST['cutt'];
        $eta=$_POST['eta'];
        $etd=$_POST['etd'];
        $vessel=$_POST['vessel'];
        $voyage=$_POST['voyage'];
        $commodity=$_POST['commodity'];
        $packages=$_POST['packages'];
        $coloader=$_POST['coloader'];
        $agent=$_POST['agent'];
        $buying=$_POST['buying'];
        $selling=$_POST['selling'];
        $roe=$_POST['roe'];
        $currency=$_POST['currency'];
        $profit=$_POST['profit'];
        $mode=$_POST['mode'];
        $sales_person=$_POST['sales_person'];
        $destufing_yard=$_POST['destufing_yard'];
        $container_number=$_POST['container_number'];
        $mbl_status=$_POST['mbl_status'];
        $hbl_status=$_POST['hbl_status'];
        $submission_manifest=$_POST['submission_manifest'];
        $arrival_notice=$_POST['arival_notice'];
        $collection_do=$_POST['collection_do'];
        $type=$_POST['type'];
        $hbl=$_POST['hbl'];
        $mbl=$_POST['mbl'];
        $volume=$_POST['volume'];
        $gross_weight=$_POST['gross_weight'];
        $net_weight=$_POST['net_weight'];
        $agreed_rate=$_POST['agreed_rate'];
        $exwork=$_POST['exwork'];
        $ocean_freight=$_POST['ocean_freight'];
        $bl=$_POST['bl'];
        $do=$_POST['do'];
        $thc=$_POST['thc'];
        $round_amount=$_POST['round_amount'];
        $agree_rate_coloader=$_POST['agree_rate_coloader'];
        $dn_charges=$_POST['dn_charges'];
        $of_charges=$_POST['of_charges'];
        $thc_coloader=$_POST['thc_coloader'];
        $docs_charges=$_POST['docs_charges'];
        $net_profit=$_POST['net_profit'];
        $insert = mysqli_query( $conn, "update booking set shipper='".$shipper."', client='".$client."', consignee='".$consignee."',pol='".$pol."',pod='".$pod."',cuttof='".$cuttof."',eta='".$eta."', etd='".$etd."',vessel='".$vessel."',voyage='".$voyage."',commodity='".$commodity."',packages='".$packages."',coloader='".$coloader."', agent='".$agent."', buying='".$buying."',selling='".$selling."',roe='".$roe."',currency='".$currency."', profit='".$profit."', mode='".$mode."',sales_person='".$sales_person."',destufing_yard='".$destufing_yard."',container_number='".$container_number."', mbl_status='".$mbl_status."', hbl_status='".$hbl_status."',submission_manifest='".$submission_manifest."',arival_notice='".$arival_notice."' ,collection_do='".$collection_do."', type='".$type."', hbl='".$hbl."',mbl='".$mbl."',volume='".$volume."' ,gross_weight='".$gross_weight."', net_weight='".$net_weight."', agreed_rate='".$agreed_rate."',exwork='".$exwork."',ocean_freight='".$ocean_freight."',bl='".$bl."', do='".$do."', thc='".$thc."',round_amount='".$round_amount."',agree_rate_coloader='".$agree_rate_coloader."',dn_charges='".$dn_charges."',of_charges='".$of_charges."', thc_coloader='".$thc_coloader."',docs_charges='".$docs_charges."',net_profit='".$net_profit."' where id='".$id."'");
        if ($insert)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('viewbooking.php');</script>";
        }
                
    }

    

 }
?>