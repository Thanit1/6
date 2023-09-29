<?php

use JetBrains\PhpStorm\Language;

require('server.php');
session_start();
$id_pf = $_GET['id'];
$query = "SELECT * FROM topics WHERE id_user = $id_pf";
$sum = mysqli_query($conn,$query );
$query2 = "SELECT * FROM comments WHERE id_user = $id_pf";
$sum2 = mysqli_query($conn,$query2 );
$sum3 = mysqli_query($conn,$query2 );
/* while($o= mysqli_fetch_assoc($sum)){ $count+1;} */

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
<div>

</div>
            <div class="container mt-4"><hr>
            <h2>กระทู้ทั้งหมด  </h2><hr>
                <div class="row">
                    <?php 
                    $count = 0 ;
                    while($row = mysqli_fetch_assoc($sum)){ $count++;?>
                     
                        <div class="col-lg-3 ">
                            <div class="card mt-3 p-3 align-items-center  " style="width: 18rem;">
                                 <div class="card-body  ">
                                    <h5 class="card-title mt-1 "><?php echo $row['topic'] ?></h5>
                                    <!-- <p class="card-text"><?php /* echo $row['topic_content'] */ ?></p> -->
                                    <a class="btn btn-primary mt-3" href="topicscom.php?id=<?php echo $row['topic_id']  ?>">Go somewhere</a>

                                </div>
                            </div>
                        </div>
                    
                    <?php } ?>
                </div> 
                <div class="container d ">
                <hr>
                <h2>คอมเมนต์ทั้งหมด  </h2><hr>
                
                <div class="row mt-4">
                    <?php 
                    $count1 = 0 ;
                    if( $r= mysqli_fetch_assoc($sum3)){

                        while($row2= mysqli_fetch_assoc($sum2)){ $count1++;?>
                        <div class="justify-content-center align-items-center d-block  ">
                            <div class="border border-black p-3 mb-3 d-block bg-white ms-2  ">
                            <div class=" justify-content-between d-flex ">
                                    <div class="mb-2 d-flex align-items-center  ">
                                        <img style="width: 5%; height: aoto;" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="me-2">
                                        
                                        <?php
                                        $idu = $row2['id_user'];
                                        $query3 = "SELECT * FROM users WHERE id_user = $idu";
                                        $sum3 = mysqli_query($conn,$query3 );
                                        $row3 = mysqli_fetch_assoc($sum3);
                                        $id_8 = $row2['topic_id'];
                                        $query4 = "SELECT * FROM topics WHERE topic_id = $id_8";
                                        $sum4 = mysqli_query($conn,$query4 );
                                        $row4 = mysqli_fetch_assoc($sum4);
                                        echo $row3['f_name'];?><div class="ms-3"> <?php echo $row2['date_time'];?></div> <div class="ms-3">จากกระทู้ : <a href="topicscom.php?id=<?php echo $row2['topic_id']; ?>"><?php echo $row4['topic']; ?></a></div>
                                    </div>
                                    <?php if($row3['user']==$_SESSION['username']){?>
                                    <div class="dropdown-center justify-content-end  d-flex ">
                                        <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                        <li><button type="button" class="dropdown-item" data-toggle="modal" data-target="#myModal2_<?php echo $row2['comment_id']; ?>">แก้ไขคอมเมนต์</button></li> <!-- แก้ไข -->
                                            <li><button type="button" class="dropdown-item" data-toggle="modal" data-target="#deleteModal_<?php echo $row2['comment_id']; ?>">ลบคอมเมนต์</button></li>     
                                        
                                        </ul>
                                    
                                        
                                    </div></div>  
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
                                            <input type="text" class="d-none " name="topic_id"value="<?php echo $row2['topic_id']; ?>">
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
                                            <input type="text" class="d-none " name="topic_id"value="<?php echo $row2['topic_id'];?>">
                                            <input type="hidden" name="comment_id" value="<?php echo $row2['comment_id']; ?>">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn btn-danger">ลบ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                                    <?php } ?>                     
                                    
                                    <div class=""> <?php echo $row2['comment']; ?></div>

            </div>
                
                    <?php } }else{ ?><div class="ms-3"><p>#ไม่มีคอมเมนต์</p></div> <?php } ?>
                        </div>
                     
                </div><hr>
                <h4>จำนวณกระทู้ : <?php echo $count ?> </h4>
                <h4>จำนวณคอมเมนต์: <?php echo $count1 ?> </h4>

                </div>
                
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>