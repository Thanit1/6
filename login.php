<!DOCTYPE html>
<html>
    <head>
        <title>เข้าสู่ระบบ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
   
    <body class="container ">
    <?php require('nav.php'); ?>
    <div class="container  mt-5 border border-primary border-3 rounded-3 p-3 shadow-lg  "> 
        <div class=" text-center ">
                <h2 >เข้าสู่ระบบ</h2>
        </div>
        <div class="align-items-center justify-content-center d-flex ">
            <div style="width: 25%;" class="  d-box " >
         
                <form method="POST" action="login_process.php">
                    <label for="username">ชื่อผู้ใช้งาน:</label>
                    <input type="text"class="form-control" placeholder="Username"name="username" required><br>
                    <label for="password">รหัสผ่าน:</label>
                    <input type="password"class="form-control" placeholder="PassWord"name="password" required><br>
         
                <div class="d-flex align-items-center justify-content-center  ">
                    <button type="submit" class="btn btn-primary me-5 ">  เข้าสู่ระบบ  </button> 
                    </form> 
                    <form method="post" action="register.php" >
                    <button type="submit" class="btn btn-primary"> สมัครสมาชิก</button>
                    </form> 
                </div>
            
                <div class=" mt-2 justify-content-end d-flex me-2"><a  href="ลืมรหัสผ่าน.php">ลืมรหัสผ่าน</a></div>
           
             
            </div>
        </div>
        
    </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    </body>
</html>