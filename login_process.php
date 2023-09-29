<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบข้อมูลจากฟอร์ม
    $username = $_POST["username"];
    $password = $_POST["password"];

    // เรียกใช้ไฟล์ server.php
    include('server.php');

    // คิวรีสำหรับตรวจสอบล็อกอิน
    $query = "SELECT * FROM users WHERE user='$username' AND pass ='$password'";
    $result = $conn->query($query);
    $row = mysqli_fetch_assoc($result);
    // ตรวจสอบผลลัพธ์
    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        $_SESSION["id_user"] = $row["id_user"];
        echo"<script> alert('ผ่านครับ') </script>";
            echo ("<script> setTimeout(function () {
                window.location.href = 'topics.php';
                }, 50); </script>");
     
    } else {
        echo"<script> alert('ล็อกอินล้มเหลว: ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง') </script>";
            echo ("<script> setTimeout(function () {
                window.location.href = 'login.php';
                }, 50); </script>");
    }

    // ปิดการเชื่อมต่อ MySQL
    $conn->close();
}
?>
