<?php
$sel="SELECT * FROM adm_user WHERE user_username='$username' AND user_password='$password' AND user_position='$position'";
 $Q=mysqli_query($con,$sel);
 $data=mysqli_fetch_assoc($Q);
 if($data){
   $_SESSION['id']=$data['user_id'];
   $_SESSION['name']=$data['user_name'];
   $_SESSION['username']=$data['user_username'];
 ?>
