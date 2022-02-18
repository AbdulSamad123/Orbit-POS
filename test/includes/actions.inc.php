<?php
$db = mysqli_connect('localhost', 'root', '' , 'mpdf');
if (isset($_GET['delete_id'])) {

    $delete_id = $_GET['delete_id'];

    $delete = "DELETE FROM form_1 WHERE Id = '$delete_id'";
    $query =   mysqli_query($db, $delete);

    if($query) {
        header("location: ../admin/1.php");
    }
  
}

if (isset($_GET['delete_id_2'])) {

    $delete_id = $_GET['delete_id_2'];

    $delete = "DELETE FROM form_2 WHERE Id = '$delete_id'";
    $query =   mysqli_query($db, $delete);

    if($query) {
        header("location: ../admin/2.php");
    }
  
}

if (isset($_GET['delete_id_3'])) {

    $delete_id = $_GET['delete_id_3'];

    $delete = "DELETE FROM form_3 WHERE Id = '$delete_id'";
    $query =   mysqli_query($db, $delete);

    if($query) {
        header("location: ../admin/3.php");
    }
  
}

if (isset($_GET['delete_id_5'])) {

    $delete_id = $_GET['delete_id_5'];

    $delete = "DELETE FROM form_5 WHERE Id = '$delete_id'";
    $query =   mysqli_query($db, $delete);

    if($query) {
        header("location: ../admin/5.php");
    }
  
}

if (isset($_GET['delete_id_6'])) {

    $delete_id = $_GET['delete_id_6'];

    $delete = "DELETE FROM form_6 WHERE Id = '$delete_id'";
    $query =   mysqli_query($db, $delete);

    if($query) {
        header("location: ../admin/6.php");
    }
  
}

?>