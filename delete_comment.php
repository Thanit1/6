<?php
// เชื่อมต่อฐานข้อมูล
include('server.php'); // แก้ไขให้เป็นชื่อไฟล์ที่คุณใช้งาน

// ตรวจสอบว่ามีการส่งค่าผ่าน POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่า comment_id จากฟอร์ม
    $comment_id = $_POST['comment_id'];
    $topic_id = $_POST['topic_id'];
    // สร้างคำสั่ง SQL ในการลบคอมเมนต์
    $sql_delete_comment = "DELETE FROM comments WHERE comment_id = ?";
    $stmt_delete_comment = $conn->prepare($sql_delete_comment);
    $stmt_delete_comment->bind_param("i", $comment_id);

    // ทำการลบคอมเมนต์
    if ($stmt_delete_comment->execute()) {
        // ลบคอมเมนต์สำเร็จ
        header("refresh:0; url=topicscom.php?id=".$topic_id); // แสดงหน้าเว็บที่คุณต้องการหลังจากการลบ
        exit();
    } else {
        echo "การลบคอมเมนต์ไม่สำเร็จ: " . $stmt_delete_comment->error;
    }

    $stmt_delete_comment->close();
}

// หากไม่มีการส่งข้อมูลผ่าน POST ให้เปลี่ยนทางไปยังหน้าเว็บ "ไม่มีสิทธิ์เข้าถึง"
header("Location: access_denied.php"); // แก้ไขเป็นหน้าที่คุณต้องการแสดง
exit();
?>
