<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบข้อมูลจากฟอร์ม
    $topic = $_POST["topic_id"];
    $comment = $_POST["comments"];
    $iduser = $_POST["iduser"];
    date_default_timezone_set("Asia/Bangkok"); 
    $date_time =date('d/m/Y H:m');
    // เรียกใช้ไฟล์ server.php
    include('server.php');
    $query = "SELECT * FROM comments";
    $topix =  "INSERT INTO comments(topic_id,id_user,comment,date_time) VALUES('$topic ','$iduser','$comment','$date_time')";
    $sum = mysqli_query($conn,$topix);
        if($sum){
           
            
            header("refresh:0; url=topicscom.php?id=".$topic);
                
                
        }
        else{
            echo"<script> alert('ไม่สำเร็จ') </script>";
            header("refresh:0; url=topicscom.php?id=".$topic);
        }
}
