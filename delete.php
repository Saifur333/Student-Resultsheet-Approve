<?php
    require_once('functions/function.php');
    $id=$_GET['del'];
    $dele="DELETE FROM stdresult WHERE std_id='$id'";
    mysqli_query($con,$dele);
    header('Location: director.php');
?>
