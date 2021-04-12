<?php
    require_once('functions/function.php');
    get_validatelogin();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel :: Login </title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >
                        <div class="col-sm-12">
                            <?php
                                if(!empty($_POST)){
                                    $username=$_POST['username'];
                                    $password=md5($_POST['password']);
                                    $position=$_POST['position'];
                                    if ($position == "director") {
                                      $sel="SELECT * FROM adm_user WHERE user_username='$username' AND user_password='$password' AND user_position='$position'";
                                       $Q=mysqli_query($con,$sel);
                                       $data=mysqli_fetch_assoc($Q);
                                       if($data){
                                         $_SESSION['id']=$data['user_id'];
                                         $_SESSION['name']=$data['user_name'];
                                         $_SESSION['username']=$data['user_username'];
                                         header('Location: director.php');
                                       }else{
                                         echo "Username or Password didn't match!";
                                         $log = "user enter incorrect username=$username password=$password";
                                         logger($log);
                                       }
                                    }
                                    else if ($position == "faculty-member") {
                                      $sel="SELECT * FROM adm_user WHERE user_username='$username' AND user_password='$password' AND user_position='$position'";
                                       $Q=mysqli_query($con,$sel);
                                       $data=mysqli_fetch_assoc($Q);
                                       if($data){
                                         $_SESSION['id']=$data['user_id'];
                                         $_SESSION['name']=$data['user_name'];
                                         $_SESSION['username']=$data['user_username'];
                                         header('Location: index.php');
                                       }else{
                                         echo "Username or Password didn't match!";
                                         $log = "user enter incorrect username=$username password=$password";
                                         logger($log);
                                       }
                                    }
                                    else if ($position == "section-officer") {
                                      $sel="SELECT * FROM adm_user WHERE user_username='$username' AND user_password='$password' AND user_position='$position'";
                                       $Q=mysqli_query($con,$sel);
                                       $data=mysqli_fetch_assoc($Q);
                                       if($data){
                                         $_SESSION['id']=$data['user_id'];
                                         $_SESSION['name']=$data['user_name'];
                                         $_SESSION['username']=$data['user_username'];
                                         header('Location: office.php');
                                       }else{
                                         echo "Username or Password didn't match!";
                                         $log = "user enter incorrect username=$username password=$password";
                                         logger($log);
                                       }
                                    }
                                    else {
                                      echo "Position didn't match!";
                                      $log = "user enter incorrect username=$username password=$password";
                                      logger($log);
                                    }

                                }
                            ?>
                        </div>
                        <form id="loginform" class="form-horizontal" role="form" method="post">

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <select class="" name="position">
                                <option value="">--Select Position--</option>
                                <option value="director">Director</option>
                                <option value="faculty-member">Faculty Member</option>
                                <option value="section-officer">Section Officer</option>
                              </select>
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button id="btn-login" class="btn btn-success">Login  </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account!
                                        <a href="#">
                                            Sign Up Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
