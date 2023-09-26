
<?php
require('server.php');
session_start();
$id_tp = $_GET['id'];
$query = "SELECT * FROM topics WHERE topic_id = $id_tp ";
$sum1 = mysqli_query($conn,$query );
$row = mysqli_fetch_assoc($sum1);
$query2 = "SELECT * FROM comments WHERE topic_id = $id_tp ";
$sum2 = mysqli_query($conn,$query2 );



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
                <li class="nav-item">
                        <a class="nav-link " href=""role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img style="width: 50px;height: 50px;  " src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class=" ">
                                <?php echo($_SESSION['username']); ?>
                                
                          </a>
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

<!-- ส่วนหน้าเว็ป -->
<div>
    <div class=" container justify-content-center d-blok  mt-5">
        <!-- กระทู้ -->
        <div class=" h-50% border border-black border-1 rounded-3 p-4">
            <div class="justify-content-between d-flex ">

                <h2>
                    <?php
                      
                        echo $row["topic"];
                    ?>
                </h2>
                <?php if(!true){?>
                <div class="dropdown-center ">
                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">แก้ไข</a></li>
                        <li><a class="dropdown-item" href="#">ลบคอมเม้นท์</a></li>
                        
                    </ul>
                </div>  
                            <?php } ?>
            </div>
           
            <div class="border border-black border-1  p-3 mt-3">
                <?php    
                   echo $row["topic_content"]; ?>
                </div>
                
        </div>
        <!-- กระทู้ -->

            <!-- คอมเม้นท์ -->
        <div class="mt-3 border border-black p-4 rounded-4  ">
            <div class=" mb-3">
                <p>ส่วนของคอมเม้นท์</p>
            </div>
        
       
            <!-- แสดงคอมเม้นท์ -->
            <div>
                <?php while($row2 = mysqli_fetch_assoc($sum2)){?>
                   
                    <div class="border border-black p-3 mb-3 d-block bg-white  ">
                        <div class=" justify-content-between d-flex ">
                            <div class="mb-2 d-flex align-items-center  ">
                                <img style="width: 5%; height: aoto;" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="me-2">
                                
                                <?php
                                $idu = $row2['id_user'];
                                $query3 = "SELECT * FROM users WHERE id_user = $idu";
                                $sum3 = mysqli_query($conn,$query3 );
                                $row3 = mysqli_fetch_assoc($sum3);
                                echo $row3['f_name'];?><div class="ms-3"> <?php date_default_timezone_set("Asia/Bangkok"); $t=date('H.m');echo($t ." น"); ?></div> 
                            </div><?php if(isset($_SESSION['username'])){ ?>
                            <?php if($row3['user']==$_SESSION['username']){?>
                            <div class="dropdown-center justify-content-end  d-flex ">
                                <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <ul class="dropdown-menu">
                                   <li><button type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal2_<?php echo $row2['comment_id']; ?>">แก้ไขคอมเมนต์</button></li> <!-- แก้ไข -->
                                    <li><button type="button" class="dropdown-item" data-toggle="modal" data-target="#deleteModal_<?php echo $row2['comment_id']; ?>">ลบคอมเมนต์</button></li>     
                                   
                                </ul>
                               
                            </div>  
                            <?php }} ?>                     
                        </div>
                       
                        <div class="modal fade" id="myModal2_<?php echo $row2['comment_id']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="update_comment.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">แก้ไขคอมเมนต์</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edited_comment">คอมเมนต์:</label>
                        <textarea name="edited_comment" id="edited_comment" class="form-control" rows="4"><?php echo $row2['comment']; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" class="d-none " name="topic_id"value="<?php echo $row["topic_id"];?>">
                    <input type="hidden" name="comment_id" value="<?php echo $row2['comment_id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ลบคอมเมนต์ -->
<div class="modal fade" id="deleteModal_<?php echo $row2['comment_id']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="delete_comment.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">ยืนยันการลบคอมเมนต์</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>คุณแน่ใจหรือไม่ว่าต้องการลบคอมเมนต์นี้?</p>
                </div>
                <div class="modal-footer">
                    <input type="text" class="d-none " name="topic_id"value="<?php echo $row["topic_id"];?>">
                    <input type="hidden" name="comment_id" value="<?php echo $row2['comment_id']; ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-danger">ลบ</button>
                </div>
            </form>
        </div>
    </div>
</div>



                        <?php echo $row2['comment']; ?>
                    </div>
                    <?php } ?>
            </div>
            <!-- แสดงคอมเม้นท์ -->

            <!-- คอมเม้นท์จากผู้ใช้ -->
            <?php if(!isset($_SESSION['username'])){ ?>
            <div class="mt-3 justify-content-center d-block  ">
                <div class="justify-content-center d-flex ">
                    <h2>กรุณาเข้าสู่ระบบก่อนคอมเมนต์</h2>
                </div>
                <div class="mt-3 justify-content-center d-flex">
                     <form method="post" action="login.php" >
                    <button type="submit" class="btn btn-primary" >เข้าสู่ระบบ</button>
                    </form> 
                    <form method="post" action="register.php" >
                    <button type="submit" class="btn btn-primary"> สมัครสมาชิก</button>
                    </form> 
                </div>
                   
        
            </div>
            <?php } else { ?> 
            <div  class=" container mt-3  p-3">
                <div class="justify-content-center d-flex  ">
                    <div style="width: 649px; height: 50px;" class="mb-2 d-flex align-items-center">
                        <img style="width: 5%; height: aoto;" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="me-2">
                        <?php echo $_SESSION['username'];?>
                    </div>
                </div>
                <div class="justify-content-center d-flex  ">
                      <form method="post" action="comments.php">
                    <div class="input-group mb-3"style="width: 649px; height: 50px;">
                            <input type="text"class="d-none  " name="topic_id" value="<?php echo  $id_tp ?>">
                            <input type="text" class=" d-none " name="iduser" value="<?php echo $_SESSION['id_user'] ?>" >
                             <input type="text" class="form-control" placeholder="Comments" aria-label="comments"name="comments" aria-describedby="button-addon2">
                             <!-- ปุ่มหรือลิงก์เพื่อเปิด Modal -->
                             <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal"id="button-addon2">โพสคอมเม้นท์</button>

                            <!-- Modal -->
                                <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                    <!-- เนื้อหา Modal -->
                                    <div class="modal-body">
                                    <h1>คอมเมนท์</h1>
                                    <p>คุณต้องการคอมเมนท์หรือไม่</p>
                                    </div>
                                    
                                    <!-- ปุ่มปิด Modal -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                        <button class="btn btn-primary" type="submit" id="button-addon2">โพสคอมเมนท์</button>
                                    </div>
                                    
                                    </div>
                                </div>
                                </div>

                            
                    </div>
                 </form>
                
                                   
                </div>
            </div>     
            <!-- คอมเม้นท์จากผู้ใช้ -->            
        </div>
                    <!-- คอมเม้นท์ -->
                    <?php } ?>
    </div>
<hr>
</div>
<!-- ส่วนหน้าเว็ป -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
