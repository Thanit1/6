<?php
session_start();
require('server.php');

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    if($pass==$pass2){
            $newName = $_POST["newName"];
            $newlName = $_POST["newlName"];
            $id_s=$_POST["id_us"];

        // อัปเดตข้อมูลในฐานข้อมูล (ให้เขียนโค้ดนี้ตามโครงสร้างของฐานข้อมูลของคุณ)
        $sql = "UPDATE users SET f_name='$newName', l_name='$newlName',pass='$pass' WHERE id_user=$id_s";

        if ($conn->query($sql) === TRUE) {
            echo "บันทึกข้อมูลสำเร็จ";
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $conn->error;
        }

    } else {
        echo "รหัสผ่านไม่ถูก " . $conn->error;
    }
    
}

$conn->close();
?>
