<?php
    require_once('functions/function.php');
    $id=$_GET['a'];
    $in= "INSERT INTO final_marksheet SELECT * FROM stdresult WHERE std_id='$id'";
    mysqli_query($con,$in);
    $del="DELETE FROM stdresult WHERE std_id='$id'";
    mysqli_query($con,$del);
    header('Location: director.php');
?>
