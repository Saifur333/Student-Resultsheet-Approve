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
#dashboard{
  height: 60px;
  background-color: #003366;
  text-align: center;
  color: #ffffff;
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
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<div class="main-area">
   <div class="container">
     <div class="row my-3" id="dashboard">
      <h3 class="py-2">Welcome to Office Panel</h3>
     </div>
     <div class="row">
       <div class="col-md-12">
         <!--marks card start-->
         <div class="card">
           <div class="card-header">Final Result Sheet</div>
           <div class="card-body">
            <!---->
            <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                		<tr>
                      	<th>Roll</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Physics</th>
                        <th>Chemistry</th>
                    </tr>
                	</thead>
                    <tbody>
                      <?php
                          $sel="SELECT * FROM final_marksheet ORDER BY std_id DESC";
                          $Q=mysqli_query($con,$sel);
                          while($data=mysqli_fetch_assoc($Q)){
                      ?>
                    	<tr>
                        	<td><?= $data['std_roll']; ?></td>
                          <td><?= $data['std_bangla']; ?></td>
                          <td><?= $data['std_english']; ?></td>
                          <td><?= $data['std_math']; ?></td>
                          <td><?= $data['std_physics']; ?></td>
                          <td><?= $data['std_chemistry']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
            <!---->
           </div>
           <div class="card-footer text-muted">
             <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <button onclick="window.print()" class="btn btn-sm btn-danger" type="button">PRINT</button>
                <button class="btn btn-sm btn-warning" type="button" name="excel">EXCEL</button>
            </div>
           </div>
         </div>
          <!--marks card end-->
       </div>
     </div>
   </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
