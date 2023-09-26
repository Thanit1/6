<!DOCTYPE html>
<html>
<head>
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

    <body>
        
        <div class="container mt-5 border border-primary border-3 rounded-3 p-3">
            <div class=" text-center ">
              <h2>สมัครสมาชิก</h2>  
            </div>
            <form method="POST" action="register_process.php">
            <div class="container mt-3 d-box " >
                <div class=" container align-items-center d-blok " >
                
                    <label class="me-2" for="username" style="width: 120px;">ชื่อผู้ใช้งาน:</label>
                    <input type="text" class="form-control"name="username"placeholder="Username" required><br>
                </div>
                <div class="row" >
                    <div class="col-6" >
                        <label class="" for="name">ชื่อ:</label>
                        <input type="text" name="name"class="form-control" placeholder="ชื่อ"require>    
                    </div>
                    <div class="col-6" >
                        <label class="" for="lastname" ">นามสกุล:</label>
                        <input type="text"class="form-control" placeholder="นามสกุล" name="lastname" require><br>
                    </div>
                </div>


                <div class="row" >
                    <div class="col-6" >
                        <label for="password" class="">รหัสผ่าน:</label>
                        <input type="password"class=" form-control "  name="password" placeholder="PassWord" required><br>
                    </div>
                       
                   <div class="col-6" >
                        <label for="password" class="">ยืนยันรหัสผ่าน:</label>
                        <input type="password" class=" form-control" name="password2" placeholder="Confirm PassWord" required><br>
                        
                   </div>      
                </div>
                
                <div class="container d-flex align-items-center justify-content-center " >
                <div class="" >
                        <button type="submit" class=" me-5 btn btn-primary">สมัครสมาชิก</button>  
                        </form>
                </div>
                    <div class="" >
                        <form method="post" action="login.php">
                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>  
                        </form>
                    </div>
                   
                
                </div>
            
            </div>
            
   
                

        </div>
            
      
            
                    
           
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
