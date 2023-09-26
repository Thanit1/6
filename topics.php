<?php
require('server.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body  class=" container justify-content-center d-block ">
<nav style=" height: 80px;  font-size: 20px;" class="navbar bg-dark border-bottom border  border-3 rounded-3 justify-content-end d-flex " data-bs-theme="dark">
    <div class=" d-flex  justify-content-end">
        <ul class="nav align-items-center  d-flex  ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="topics.php">กระทู้</a>
            </li>
            <?php
            

            if (!isset($_SESSION['username'])) {?>
            <li class="nav-item">
                <a class="nav-link" href="#">สมัครสมาชิก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php" >login</a>
            </li>
            <?php } else { ?>
                <div class="dropdown">
                <li class="nav-item me-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo($_SESSION['username']);?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">แก้ไข</a></li>
                        <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                        
                    </ul>
                                           
                </li>
                </div>
                <?php }?>

    </ul>
</div>
</nav>
<div class="container border border-black  border-3 rounded-3 justify-content-center  d-block  mt-4 p-3   ">
    <div class="constant border border-black  border-3 rounded-3 p-3 ">
        
            <div class="mb-2 justify-content-center   d-flex ">
                <h2>กระทู้</h2>
            </div>
            <hr>
            <div class="container">
                <div class="row ">
                    <?php 
                    $query = "SELECT * FROM topics";
                    $sum2 = mysqli_query($conn,$query );
                    
                    while($row = mysqli_fetch_assoc($sum2)){ ?>
                        <div class="col-lg-3 ">
                            <div class="card" style="width: 18rem;">
                                <img src="img/w.png" style="object-fit: cover;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['topic'] ?></h5>
                                    <p class="card-text"><?php echo $row['topic_content'] ?></p>
                                    <a class="btn btn-primary" href="topicscom.php?id=<?php echo $row['topic_id']  ?>">Go somewhere</a>

                                </div>
                            </div>
                        </div>
                    
                    <?php } ?>
                </div>
            </div>
    </div>
    <div class=" constant border border-black  border-3 rounded-3 p-3 mt-3 d-block  ">
        <div class="mt-3 justify-content-center d-flex ">

            <h3>ตั้งกระทู้</h3>
                
        </div>
         <hr>
        <?php if(!isset($_SESSION['username'])){ ?>
            <div class="mt-3 justify-content-center d-block  ">
                <div class="justify-content-center d-flex ">
                    <h2>กรุณาเข้าสู่ระบบก่อนตั้งกระทู้</h2>
                </div>
                <div class="mt-3 justify-content-center d-flex">
                     <form method="post" action="login.php" >
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </form> 
                    <form method="post" action="register.php" >
                    <button type="submit" class="btn btn-primary"> สมัครสมาชิก</button>
                    </form> 
                </div>
                   
        
            </div>
            <?php } else { ?> 
       
            
            <form action="topic_process.php" method="post">
            <div class="input-group justify-content-center d-flex mb-3 ">
                <span class="input-group-text">หัวข้อ</span>
                <input class="form-control" type="text"name="topic">
                
            </div>                      
            
            <div class="input-group justify-content-center d-flex">
                        
                <span class="input-group-text">เนื้อหากระทู้</span>
                <textarea class="form-control" aria-label="topiccontent" name="topiccon" ></textarea>
                <input type="text" class=" d-none " name="iduser" value="<?php echo $_SESSION['id_user'] ?>">
            </div>
            <div class="mt-3 justify-content-center d-flex ">
                <button type="submit" class="btn btn-primary">โพสต์</button>   
            </div>          
            </form>
       
            <?php } ?>
       
       
    </div>
       


</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>