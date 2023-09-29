<?php
require('server.php');
session_start();
$sql ="SELECT * FROM topics "; 
$q= mysqli_query($conn,$sql );
$tp = $q->num_rows;
$sql1 ="SELECT * FROM comments"; 
$q1= mysqli_query($conn,$sql1 );
$tp1 = $q1->num_rows;
$sql2 ="SELECT * FROM users "; 
$q2= mysqli_query($conn,$sql2 );
$tp2 = $q2->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body class="container ">
<?php require('nav.php'); ?>
    <div >
       <div class="justify-content-center  align-items-center d-flex  mt-4 "><h1>รายงานการใช้งานของเว็ป</h1></div>
    <div class="card text-center mt-4 ">
        <div class="card-header">
          
        </div>
        <div class="card-body">
            <h5 class="card-title">กระทู้ทั้งหมด</h5>
            <p class="card-text">มี <?php echo $tp ?> กระทู้</p>
            <!-- <a href="topics.php" class="btn btn-primary">Go somewhere</a> -->
        </div>
        <div class="card-footer text-body-secondary">
            
    </div>
</div>
<div class="card text-center mt-4 ">
        <div class="card-header">
          
        </div>
        <div class="card-body">
            <h5 class="card-title">คอมเมนต์ทั้งหมด</h5>
            <p class="card-text">มี <?php echo $tp1 ?> คอมเมนต์</p>
            <!-- <a href="topics.php" class="btn btn-primary">Go somewhere</a> -->
        </div>
        <div class="card-footer text-body-secondary">
            
    </div>
</div>
<div class="card text-center mt-4 ">
        <div class="card-header">
          
        </div>
        <div class="card-body">
            <h5 class="card-title">ผู้ใช้ทั้งหมด</h5>
            <p class="card-text">มี <?php echo $tp2 ?> บัญชี</p>
           
          <!--   <a href="topics.php" class="btn btn-primary">Go somewhere</a> -->
        </div>
        <div class="card-footer text-body-secondary">
            
    </div>
</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>