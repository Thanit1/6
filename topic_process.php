<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบข้อมูลจากฟอร์ม
    $topic = $_POST["topic"];
    $topiccontent = $_POST["topiccon"];
    $iduser = $_POST["iduser"];
    date_default_timezone_set("Asia/Bangkok"); 
    $date_time =date('d/m/Y H:m');
    
    // เรียกใช้ไฟล์ server.php
    include('server.php');

   
    $query = "SELECT * FROM topics";

    $topix = "INSERT INTO topics(topic,topic_content,id_user,date_time) VALUES('$topic','$topiccontent','$iduser','$date_time')";
    
    $sum = mysqli_query($conn,$topix);
        if($sum){
            
            echo"<script> alert('สำเร็จ') </script>";
            echo ("<script> setTimeout(function () {
                window.location.href = 'topics.php';
                }, 50); </script>");
        }
        else{
            echo"<script> alert('ไม่สำเร็จ') </script>";
            echo ("<script> setTimeout(function () {
                window.location.href = 'topics.php';
                }, 50); </script>");
        }
}
