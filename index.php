<?php
    require_once('functions/function.php');
    needLogged();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marksheet</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style media="screen">
.selector-for-some-widget {
box-sizing: content-box;
}
.header-top{
  height: 40px;
  background-color: #003366;
}
</style>
  </head>
  <body>
       <div class="header-top">
        <div class="row">
        </div>
       </div>
       <header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <img src="img/iit.png" alt="">
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
</ul>


      <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="director.php" class="nav-link">Director</a></li>
            <li class="nav-item"><a href="office.php" class="nav-link">Office</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
          </ul>
      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<div class="main-area">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
       </div>
       <div class="col-md-6">
         <div class="card">
  <div class="card-header">
    Add Marks to the Result Sheet
  </div>
  <div class="card-body">
    <form id="marksform" class="form-horizontal" role="form" method="post">
      <?php
                if(!empty($_POST)){
                    $roll=$_POST['roll'];
                    $rol= mysqli_real_escape_string($con, $roll);
                    $bangla=$_POST['bangla'];
                    $english=$_POST['english'];
                    $math=$_POST['math'];
                    $physics=$_POST['physics'];
                    $chemistry=$_POST['chemistry'];
                    if(!empty($roll)){

                        $insert="INSERT INTO stdresult(std_roll,std_bangla,std_english,std_math,std_physics,std_chemistry)
                        VALUES('$rol','$bangla','$english','$math','$physics','$chemistry')";
                        if(mysqli_query($con,$insert)){
                            echo "Successfull";
                        }else{
                            echo "Failed";
                        }

                    }else{
                          echo "Please, enter value";
                    }
                }
            ?>
                            <div style="margin-bottom: 20px" class="input-group">
                                <input type="text" maxlength="11" pattern="[A-Z 0-9 A-Z]{11}" class="form-control" name="roll" placeholder="Student Roll" required>
                            </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                <input type="number" min="0" max="100" class="form-control" name="bangla" placeholder="Bangla" required>
                            </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                <input type="number" min="0" max="100" class="form-control" name="english" placeholder="English" required>
                            </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                <input type="number" min="0" max="100" class="form-control" name="math" placeholder="Math" required>
                            </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                <input type="number" min="0" max="100" class="form-control" name="physics" placeholder="Physics" required>
                            </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                <input type="number" min="0" max="100" class="form-control" name="chemistry" placeholder="Chemistry" required>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <button id="btn-login" class="btn btn-success">Submit </button>
                                </div>
                            </div>
                        </form>
  </div>
</div>
       </div>
     </div>
   </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
