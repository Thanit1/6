<?php
 require('server.php');
session_start();

$id_us = $_GET['id'];
 $test ="SELECT * FROM users WHERE id_user = $id_us";
$u= mysqli_query($conn,$test );
$row = mysqli_fetch_assoc($u);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลส่วนตัว</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body class="container ">

<?php require('nav.php'); ?>


    <div class="justify-content-center align-items-center    d-flex  mb-5   ">
        <div class="justify-content-center d-flex mt-4 border-1 border  border-black rounded-4 h-50 w-50 ">
           
           <h1>แก้ไขข้อมูลส่วนตัว</h1>
        </div>
    </div>

<div class="justify-content-center align-items-center d-block border shadow-lg  rounded-3   p-5 ">
   
         <form method="post" action="update_profile_process.php">
    <div class="input-group mb-3 mt-5 ">
        <span class="input-group-text">ชื่อ</span> 
        <input type="text" id="id_us" name="id_us"class="d-none" value="<?php echo $row['id_user']; ?>">
        <input type="text" class="form-control" name="newName" value="<?php echo $row['f_name']; ?>">
        <span class="input-group-text">นามสกุล</span>
        <input type="text" class="form-control"name="newlName" value="<?php echo $row['l_name']; ?>">
    </div>
    <div class="input-group mb-4 ">
        <span class="input-group-text">รหัสผ่าน</span> 
        
        <input type="password" class="form-control" name="pass" value="<?php echo $row['pass']; ?>">
        <span class="input-group-text">รหัสผ่านยืนยันรหัสผ่าน</span>
        <input type="password" class="form-control"name="pass2" value="">
    </div>
        <div class="d-grid gap-2  justify-content-center d-flex   ">
            <button  type="submit"class="btn btn-primary" type="button">ยืนยันการแก้ไข</button>
          <a class="btn btn-danger" type="button"href="update_profile.php?id=<?php echo $row['id_user']; ?>">ยกเลิก</a>
            </div>
      
    </form>
  
   

</div>
    
    
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>
