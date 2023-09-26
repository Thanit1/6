<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบข้อมูลจากฟอร์ม
    $topic = $_POST["topic_id"];
    $comment = $_POST["comments"];
    $iduser = $_POST["iduser"];
    
    // เรียกใช้ไฟล์ server.php
    include('server.php');
    $query = "SELECT * FROM comments";
    $topix =  "INSERT INTO comments(topic_id,id_user,comment) VALUES('$topic ','$iduser','$comment')";
    $sum = mysqli_query($conn,$topix);
        if($sum){
           
            echo"<script> alert('สำเร็จ') </script>";
            header("refresh:0; url=topicscom.php?id=".$topic);
                
                
        }
        else{
            echo"<script> alert('ไม่สำเร็จ') </script>";
            header("refresh:0; url=topicscom.php?id=".$topic);
        }
}
