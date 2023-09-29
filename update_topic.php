<?php
// เชื่อมต่อฐานข้อมูล
include('server.php'); // แก้ไขให้เป็นชื่อไฟล์ที่คุณใช้งาน

// ตรวจสอบว่ามีการส่งค่าผ่าน POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าที่ส่งมาจากฟอร์ม
    $topic_id = $_POST['topic_id'];
    $edited_topic = $_POST['edited_topic'];
    $edited_content = $_POST['edited_content'];

    // สร้างคำสั่ง SQL ในการอัปเดตข้อมูลหัวข้อ
    $sql = "UPDATE topics SET topic = ?, topic_content = ? WHERE topic_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $edited_topic, $edited_content, $topic_id);

    // ทำการอัปเดตข้อมูลหัวข้อ
    if ($stmt->execute()) {
        // อัปเดตข้อมูลสำเร็จ
        header("Location: topicscom.php?id=" . $topic_id); // แสดงหน้าเว็บที่คุณต้องการหลังจากการอัปเดต
        exit();
    } else {
        echo "การอัปเดตข้อมูลไม่สำเร็จ: " . $stmt->error;
    }

    $stmt->close();
}

// หากไม่มีการส่งข้อมูลผ่าน POST ให้เปลี่ยนทางไปยังหน้าเว็บ "ไม่มีสิทธิ์เข้าถึง"
header("Location: access_denied.php"); // แก้ไขเป็นหน้าที่คุณต้องการแสดง
exit();
?>
