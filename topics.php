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
<?php require('nav.php'); ?>
<div class="container shadow  rounded-5 justify-content-center  d-block  mt-4 p-3   ">
    <div class="constant  p-3  ">
        
            <div class="mb-2 justify-content-center   d-flex ">
                <h2>กระทู้</h2>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <?php 
                    $query = "SELECT * FROM topics";
                    $sum2 = mysqli_query($conn,$query );
                    
                    while($row = mysqli_fetch_assoc($sum2)){ ?>
                        <div class="col-lg-3 ">
                            <div class="card mt-5 p-3 " style="width: 18rem;">
                              
                                <div class="card-body  "><?php $id_9=$row['topic_id']; $test1 ="SELECT * FROM comments WHERE topic_id = $id_9"; $u= mysqli_query($conn,$test1 );$countcom = $u->num_rows;?>
                                    <h5 class="card-title mt-1 "><?php  echo $row['topic'] ?></h5>
                                    <p class="card-text">มีความคิดเห็น : <?php ; echo $countcom; ?></p>
                                    <a class="btn btn-primary mt-3" href="topicscom.php?id=<?php echo $row['topic_id']  ?>">Go somewhere</a>

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