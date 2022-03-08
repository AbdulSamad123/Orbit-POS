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
        $insert = mysqli_query( $conn, "select * from user where email='".$email."' AND password='".$pass."'" );
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
        $insert = mysqli_query( $conn, "insert into shipper values('$id','$name','$address','$email','$contact','$ntn');" );
        if ( $insert )
        {
            echo "<script> alert('Shipper Added'); </script>";
        }
    }
   
    
    
    function coupons()
     {
    $conn=$_SESSION['conn'];
    $insert=mysqli_query($conn,"select * from coupon");
    $num=mysqli_num_rows($insert);
    $count=0;
    for($i=0; $i<$num; $i++)
    {
        $count=$count+1;
    }
    echo $count;
    } 
    function popu()
    {
   $conn=$_SESSION['conn'];
   $insert=mysqli_query($conn,"select * from coupon where checkbox=1");
   $num=mysqli_num_rows($insert);
   $count=0;
   for($i=0; $i<$num; $i++)
   {
       $count=$count+1;
   }
   echo $count;
   } 
    function deals()
    {
   $conn=$_SESSION['conn'];
   $insert=mysqli_query($conn,"select * from deals");
   $num=mysqli_num_rows($insert);
   $count=0;
   for($i=0; $i<$num; $i++)
   {
       $count=$count+1;
   }
   echo $count;
   } 
   function offers()
   {
  $conn=$_SESSION['conn'];
  $insert=mysqli_query($conn,"select * from offers");
  $num=mysqli_num_rows($insert);
  $count=0;
  for($i=0; $i<$num; $i++)
  {
      $count=$count+1;
  }
  echo $count;
  } 
  function store()
  {
 $conn=$_SESSION['conn'];
 $insert=mysqli_query($conn,"select * from store");
 $num=mysqli_num_rows($insert);
 $count=0;
 for($i=0; $i<$num; $i++)
 {
     $count=$count+1;
 }
 echo $count;
 } 
 function category()
 {
$conn=$_SESSION['conn'];
$insert=mysqli_query($conn,"select * from category");
$num=mysqli_num_rows($insert);
$count=0;
for($i=0; $i<$num; $i++)
{
    $count=$count+1;
}
echo $count;
} 
function contact()
{
$conn=$_SESSION['conn'];
$insert=mysqli_query($conn,"select * from contact");
$num=mysqli_num_rows($insert);
$count=0;
for($i=0; $i<$num; $i++)
{
   $count=$count+1;
}
echo $count;
} 

    function user_data()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from login' );
        $num = mysqli_num_rows( $sel );
        for ( $i = 1; $i <= $num; $i++ )
 {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '</tr>';
        }
    }

    function view_allstr()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from store");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<a href=$row[3]><i class='ti-shopping-cart'></i>" .$row[2] . "</a>"."<hr>";					
		}
    }
    
    function view_allcat()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from category");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<a><i class='ti-briefcase'></i>" .$row[1] . "</a>"."<hr>";					
		}
    }

    function get_deal()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from offers");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
            $row=mysqli_fetch_array($sel);        
            echo "<a class='coupon-image bg-image' data-image-src=assets/images/$row[5]>"."</a>"."<hr/>";
            echo "<div class='coupon-value' content='40%'>".$row[3]."</div>";
            echo "<h4 class='coupon-title'>"."<a href=>".$row[7]."</a>"."</h4>";	
            echo "<div class='action-block'>";
            echo "<p class='btn-code' data-type='code'>"."<span class='partial-code'>".$row[6]."</span>"."<span class='btn-hover'>"."Get Code"."</span>"."</p>";
            echo "</div>"; 	
            echo "<div class='row'>";	
            echo "<div class='col-sm-12'>"."<span class='expiry_date'>".$row[8]."</span>";
            echo "</div>";
            echo "</div>"; 

		}
    }

        function view_str()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from store");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[2]. "</option>";					
		}
    }
    function view_cat()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from category");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
		{
			$row=mysqli_fetch_array($sel);
			echo "<option value=$row[0]>" .$row[1]. "</option>";					
		}
    }
    
    function cus_data()
    {
           $conn = $_SESSION['conn'];
           $sel = mysqli_query( $conn, 'select * from customer' );
           $num = mysqli_num_rows( $sel );
           for ( $i = 1; $i <= $num; $i++ )
    {
               $row = mysqli_fetch_array( $sel );
               echo '<tr>';
               echo '<td>' . $i . '</td>';
               echo '<td>' . $row[1] . '</td>';
               echo '<td>' . $row[2] . '</td>';
               echo '<td>' . $row[3] . '</td>';
               echo '</tr>';
           }
       }
       function contact_data()
       {
              $conn = $_SESSION['conn'];
              $sel = mysqli_query( $conn, 'select * from contact' );
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
                  echo '</tr>';
              }
          }
   
    function view_coupon()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from coupon' );
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
            echo '<td>' . $row[6] . '</td>';
            echo '<td>' . $row[7] . '</td>';
            echo '<td>' . $row[8] . '</td>';
            echo "<td class='text-warning'>" . '<a href="update_coupon.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="delete.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }

    }

    function view_deal()
 {
        $conn = $_SESSION['conn'];
        $sel = mysqli_query( $conn, 'select * from deals' );
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
            echo '<td>' . $row[6] . '</td>';
            echo '<td>' . $row[7] . '</td>';
            echo '<td>' . $row[8] . '</td>';
             echo "<td class='text-warning'>" . '<a href="update_deal.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="deal_delete.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }

    }

    function view_offer()
    {
           $conn = $_SESSION['conn'];
           $sel = mysqli_query( $conn, 'select * from offers' );
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
               echo '<td>' . $row[6] . '</td>';
               echo '<td>' . $row[7] . '</td>';
               echo '<td>' . $row[8] . '</td>';
                echo "<td class='text-warning'>" . '<a href="update_offer.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_offer.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
               echo '</tr>';
           }
   
       }
       function view_store()
       {
              $conn = $_SESSION['conn'];
              $sel = mysqli_query( $conn, 'select * from store' );
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
                   echo "<td class='text-warning'>" . '<a href="update_store.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_store.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
                  echo '</tr>';
              }
       }
          function view_category()
          {
                 $conn = $_SESSION['conn'];
                 $sel = mysqli_query( $conn, 'select * from category' );
                 $num = mysqli_num_rows( $sel );
                 for ( $i = 1; $i <= $num; $i++ )
          {
                     $row = mysqli_fetch_array( $sel );
                     echo '<tr>';
                     echo '<td>' . $i . '</td>';
                     echo '<td>' . $row[1] . '</td>';
                      echo "<td class='text-warning'>" . '<a href="update_category.php?id='.$row[0].'"><i class="fas fa-pen"></i> </a> | <a href="del_category.php?id='.$row[0].'"><i class="fas fa-trash"></i> </a>' . '</td>';
                     echo '</tr>';
                 }
         
             }

             function del_coupon()
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $select = mysqli_query($conn,"delete from coupon where id='$id'");
                 if ($select)
                 {
                     # code...
                         echo "<script> alert('Data deleted');</script>";
                         header("location:show_coupons.php");
                 }
                         
             }

             function del_deal()
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $select = mysqli_query($conn,"delete from deals where id='$id'");
                 if ($select)
                 {
                     # code...
                         echo "<script> alert('Data deleted');</script>";
                         header("location:show_deals.php");
                 }
                         
             }

             
             function del_offer()
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $select = mysqli_query($conn,"delete from offers where id='$id'");
                 if ($select)
                 {
                     # code...
                         echo "<script> alert('Data deleted');</script>";
                         header("location:show_offers.php");
                 }
                         
             }
             function del_store()
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $select = mysqli_query($conn,"delete from store where id='$id'");
                 if ($select)
                 {
                     # code...
                         echo "<script> alert('Data deleted');</script>";
                         header("location:show_store.php");
                 }
                         
             }
             function del_category()
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $select = mysqli_query($conn,"delete from category where id='$id'");
                 if ($select)
                 {
                     # code...
                         echo "<script> alert('Data deleted');</script>";
                         header("location:show_category.php");
                 }
                         
             }
             function upd_coupon($date,$exp_date,$discription,$link,$coupon_code,$store,$category,$checkbox)
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $date = $_POST['txtdate'];
                 $exp_date = $_POST['txtexp'];
                 $discription = $_POST['txtdis'];                 
                 $link = $_POST['txtlink'];
                 $coupon_code = $_POST['txtcod'];
                 $store = $_POST['txtstore'];
                 $category = $_POST['txtcat'];
                 $checkbox = $_POST['checkbox'];
                 $insert = mysqli_query( $conn, "update coupon set date='".$date."', exp_date='".$exp_date."', discription='".$discription."', link='".$link."', coupon_code='".$coupon_code."',store='".$store."', category='".$category."', checkbox='".$checkbox."' where id='".$id."'" );
                 if ($insert)
                 {
                     # code...
                         echo "<script> alert('Data Updated');</script>";
                         echo "<script> window.location.assign('show_coupons.php');</script>";
                 }
                         
             }

             function upd_deal($date,$exp_date,$discription,$link,$coupon_code,$store,$category)
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $date = $_POST['txtdate'];
                 $exp_date = $_POST['txtexp'];
                 $discription = $_POST['txtdis'];
                 $link = $_POST['txtlink'];
                 $image =  $_FILES["txtimg"]["name"];        
                 if(isset($_FILES["txtimg"]))
                 {
                         move_uploaded_file($_FILES["txtimg"]["tmp_name"],"assets/images/uploads/". $image);    	
                 }
                 $deal_code = $_POST['txtcod'];
                 $store = $_POST['txtstore'];
                 $category = $_POST['txtcat'];
                 $insert = mysqli_query( $conn, "update deals set date='".$date."', exp_date='".$exp_date."', discription='".$discription."', link='".$link."',image='".$image."',deal_code='".$deal_code."',store='".$store."', category='".$category."' where id='".$id."'" );
                 if ($insert)
                 {
                     # code...
                         echo "<script> alert('Data Updated');</script>";
                         echo "<script> window.location.assign('show_deals.php');</script>";
                 }
                         
             }

             function upd_offer($date,$exp_date,$discription,$link,$code,$store,$category)
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $date = $_POST['txtdate'];
                 $exp_date = $_POST['txtexp'];
                 $discription = $_POST['txtdis'];
                 $link = $_POST['txtlink'];
                 $image =  $_FILES["txtimg"]["name"];        
                 if(isset($_FILES["txtimg"]))
                 {
                         move_uploaded_file($_FILES["txtimg"]["tmp_name"],"assets/images/uploads/". $image);    	
                 }
                 $code = $_POST['txtcod'];
                 $store = $_POST['txtstore'];
                 $category = $_POST['txtcat'];
                 $insert = mysqli_query( $conn, "update offers set date='".$date."', exp_date='".$exp_date."', discription='".$discription."', link='".$link."',image='".$image."',code='".$code."',store='".$store."', category='".$category."' where id='".$id."'" );
                 if ($insert)
                 {
                     # code...
                         echo "<script> alert('Data Updated');</script>";
                         echo "<script> window.location.assign('show_offers.php');</script>";
                 }
                         
             }

             
             function upd_store($name,$website,$content)
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $logo =  $_FILES["txtlogo"]["name"];        
                 if(isset($_FILES["txtlogo"]))
                 {
                         move_uploaded_file($_FILES["txtlogo"]["tmp_name"],"assets/images/uploads/". $logo);    	
                 }
                 $name = $_POST['txtname'];
                 $website = $_POST['txtweb'];
                 $content = $_POST['txtcon'];
                 $insert = mysqli_query( $conn, "update store set logo='".$logo."', name='".$name."', website='".$website."',content='".$content."' where id='".$id."'" );
                 if ($insert)
                 {
                     # code...
                         echo "<script> alert('Data Updated');</script>";
                         echo "<script> window.location.assign('show_store.php');</script>";
                 }
                         
             }

             function update_category($name)
             {
                 $conn = $_SESSION['conn'];
                 $id= $_GET['id'];
                 $name = $_POST['txtcat'];
                 $insert = mysqli_query( $conn, "update category set name='".$name."' where id='".$id."'" );
                 if ($insert)
                 {
                     # code...
                         echo "<script> alert('Data Updated');</script>";
                         echo "<script> window.location.assign('show_category.php');</script>";
                 }
                         
             }


 }
?>