
<nav style=" height: 80px; font-size: 20px;" class="navbar  shadow    border-3 rounded-3 justify-content-end d-flex mt-4" data-bs-theme="">
    <div class=" d-flex  justify-content-end">
        <ul class="nav nav-pills nav-fill align-items-center  d-flex  ">
            <li class="nav-item">
                <a class="nav-link "  href="home.php">HOME</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="สถานที่ท่องเที่ยว.php">สถานที่ท้องเที่ยว</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="แนะนำอาหารอีสาน.php">แนะนำอาหาร</a>
            </li>
            <div class="dropdown">
                <li class="nav-item ">
                    <button class="nav-link  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ประเพณี
                    </button>
                    <ul class="dropdown-menu bg-white text-black  " style="font-size: 20px;"
                        <li><a class="dropdown-item" href="homeone.php">งานมหกรรมโปงลาง แพรวากาฬสินธุ์</a></li>
                        <li><a class="dropdown-item" href="hometwo.php">ประเพณีขึ้นเขาพนมรุ้ง</a></li>
                        <li><a class="dropdown-item" href="homethree.php">ประเพณีบุญบั้งไฟ</a></li> 
                        <li><a class="dropdown-item" href="homefour.php">งานประเพณีบุญหลวงและการละเล่นผีตาโขน</a></li>    
                        <li><a class="dropdown-item" href="homefive.php">ประเพณีแห่เทียนพรรษา</a></li> 
                        <li><a class="dropdown-item" href="homesix.php">ประเพณีไหลเรือไฟ</a></li>    
                        <li><a class="dropdown-item" href="homeseven.php">ประเพณีแซนโฎนตา</a></li>    
                        <li><a class="dropdown-item" href="home_eight.php">ประเพณีบุญผะเหวด</a></li>          
                    </ul>
                                           
                </li>
                </div>
            <div class="dropdown">
                <li class="nav-item me-2">
                    <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ข้อมูลภาคตะวันออกเฉียงเหนือ
                    </button>
                    <ul class="dropdown-menu" style="font-size: 20px;"
                        <li><a class="dropdown-item" href="ข้อมูล.php">ข้อมูล</a></li>
                        <li><a class="dropdown-item" href="เครื่องดนตรี.php">เครื่องดนตรีประจำภาคตะวันออกเฉียงเหนือ</a></li>    
                    </ul>
                                           
                </li>
                </div>
                <li class="nav-item">
                <a class="nav-link" href="topics.php">กระทู้</a>
            </li>
            <li> <a class="nav-link" href="report.php">รายงาน</a></li>
            <?php
            

            if (!isset($_SESSION['username'])) {?>
           
            <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="register.php">สมัครสมาชิก</a>
            </li>
            <li class="nav-item ms-3 me-4">
                <a class="nav-link  active" aria-current="page" href="login.php" >login</a>
            </li>
            <?php } else { ?>
                <div class="dropdown">
                <li class="nav-item me-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo($_SESSION['username']);?>
                    </button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="update_profile.php?id=<?php echo $_SESSION['id_user'] ?>">แก้ไขข้อมูล User</a></li>
                        <li><a class="dropdown-item" href="proflin.php?id=<?php echo $_SESSION['id_user'] ?>">ข้อมูลการใช้งานของUser</a></li>
                        <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
                        
                    </ul>
                                           
                </li>
                </div>
                <?php }?>

    </ul>
</div>
</nav>
