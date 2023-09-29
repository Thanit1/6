<?php

include('server.php'); // แก้ไขให้เป็นชื่อไฟล์ที่คุณใช้งาน
session_start();
// ตรวจสอบว่ามีการส่งค่าผ่าน POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่า comment_id และ edited_comment จากฟอร์ม
    $comment_id = $_POST['comment_id'];
    $edited_comment = $_POST['edited_comment'];
    $topic_id = $_POST['topic_id'];
    // สร้างคำสั่ง SQL ในการอัปเดตคอมเมนต์
    $sql = "UPDATE comments SET comment = ? WHERE comment_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $edited_comment, $comment_id);
    $query3 = "SELECT * FROM topics WHERE topic_id = $topic_id";
    $sum3 = mysqli_query($conn,$query3 );
    $row3 = mysqli_fetch_assoc($sum3);
    // ทำการอัปเดตคอมเมนต์
    if ($stmt->execute()) {
        // อัปเดตคอมเมนต์สำเร็จ
        header("refresh:0; url=topicscom.php?id=".$row3['topic_id']); // แสดงหน้าเว็บที่คุณต้องการหลังจากการอัปเดต
        exit();
    } else {
        echo "การอัปเดตคอมเมนต์ไม่สำเร็จ: " . $stmt->error;
    }

    $stmt->close();
}

// หากไม่มีการส่งข้อมูลผ่าน POST ให้เปิดหน้าเว็บ "ไม่มีสิทธิ์เข้าถึง"
header("Location: access_denied.php"); // แก้ไขเป็นหน้าที่คุณต้องการแสดง
exit();
?>
