<?php
require('server.php');
session_start();

// ตรวจสอบว่ามีค่า id ที่ถูกส่งมาทาง URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // รับค่า id จาก URL
    $id_tp = $_GET['id'];

    $query2= "DELETE FROM comments WHERE topic_id = $id_tp";
    
    // สร้างคำสั่ง SQL แบบ prepared statement เพื่อลบหัวข้อ
    $query = "DELETE FROM topics WHERE topic_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_tp);

    // ทำการลบหัวข้อ
    if ($stmt->execute()) {
        echo"<script> alert('ลบกระทู้แล้ว') </script>";
        echo ("<script> setTimeout(function () {
            window.location.href = 'topics.php';
            }, 50); </script>");
    } else {
        echo "ข้อผิดพลาดในการลบหัวข้อ: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ไม่พบค่า id ที่ถูกส่งมา";
}

// หลังจากลบหัวข้อเสร็จสิ้น คุณสามารถนำผู้ใช้กลับไปยังหน้าอื่นหรือทำอย่างอื่นตามที่คุณต้องการ
?>
