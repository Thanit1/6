<?php 

    require('server.php');
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
    $f_name =$_POST['name'];
    $l_name = $_POST['lastname'];
    $checksql = "SELECT * FROM users ";
    $sum2 = mysqli_query($conn,$checksql);


    if($pass == $pass2){
        $count_c = 0;
        while($row = mysqli_fetch_assoc($sum2)){
            if($row['user'] == $user){
                $count_c = 0;
                break;
            }
            else{
                $count_c = 1;
            }
        } 

        if($count_c==1){
            $sql = "INSERT INTO users(user,f_name,l_name,pass) VALUES('$user','$f_name','l_name','$pass')";
            $sum = mysqli_query($conn,$sql);
                if($sum){
                    
                    echo"<script> alert('สมัครสำเร็จ') </script>";
                    echo ("<script> setTimeout(function () {
                        window.location.href = 'login.php';
                        }, 50); </script>");
                }
                else{
                    echo"<script> alert('สมัครไม่สำเร็จ') </script>";
                    echo ("<script> setTimeout(function () {
                        window.location.href = 'register.php';
                        }, 50); </script>");
                }
        }
        else if($count_c==0){
            echo"<script> alert('User ซ้ำ') </script>";
            echo ("<script> setTimeout(function () {
                window.location.href = 'register.php';
            }, 50); </script>");
        
        }

    }else{
        echo"<script> alert('รหัสผ่านไม่ตรงกัน') </script>";
        echo ("<script> setTimeout(function () {
            window.location.href = 'register.php';
            }, 50); </script>");    
    }



?>