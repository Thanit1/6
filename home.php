<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
  .carousel-item img {
    height: 720px; /* กำหนดความสูงของรูป */
    width: 100%; /* กำหนดความกว้างของรูป */
    object-fit: cover; /* ให้รูปภาพทำการ crop เพื่อให้พอดีกับขนาดที่กำหนด */
  }</style>
</head>
<body>
<div class="container">
    <?php require('nav.php'); ?>
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        

              <!-- Hero -->
      <div class="px-4 py-5 my-5 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <h1 class="display-6 fw-bold text-body-emphasis mb-4">ประเพณีและวัฒนธรรมภาคตะวันออกเฉียงเหนือที่แนะนำ</h1><br>
        <div id="carouselExampleSlidesOnly" class="carousel slide mb-4  object-fit-cover  "  data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                <img src="https://my.kapook.com/imagescontent/fb_img/298/s_47157_6294.jpg" class="d-block mx-auto w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src="https://f.ptcdn.info/306/020/000/1403192656-7-o.jpg" class=" w-100 d-block mx-auto " alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src="https://cdn.esan108.com/main/wp-content/uploads/2019/06/อีสาน-ความหมายและที่มา.jpg" class="d-block w-100 mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src=" https://f.ptcdn.info/307/020/000/1403194094-23-o.jpg" class="d-block w-100 mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src=" https://f.ptcdn.info/306/020/000/1403193141-11-o.jpg" class="d-block w-100 mx-auto" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                <img src=" https://f.ptcdn.info/306/020/000/1403193242-12-o.jpg" class="d-block w-100 mx-auto" alt="...">
                </div>
               
            </div>
        </div>
        <div>
          <p class="lead mb-4">ภาคตะวันออกเฉียงเหนือ ตั้งอยู่บนที่ราบสูงโคราช มีแม่น้ำโขงกั้นเขตทางตอนเหนือ และตะวันออกของภาค โดยทางด้านใต้จรดชายแดนกัมพูชา ทางตะวันตกมีเทือกเขาเพชรบูรณ์ และเทือกเขาดงพญาเย็นเป็นแนวกั้นแยกจากภาคเหนือและภาคกลาง ซึ่งเทือกเขาที่สูงที่สุดในภาคอีสานคือยอดภูกระดึง ซึ่งเป็นต้นกำเนิดของแม่น้ำสายสำคัญของชาวอีสาน เช่น ลำตะคอง แม่น้ำชี และแม่น้ำมูลอีสาน มีเนื้อที่ประมาณ 170,000 ตารางกิโลเมตร ซึ่งเทียบได้กับหนี่งในสามของพื้นที่ทั้งหมดของประเทศไทย ซึ่งประกอบด้วยจังหวัดต่างๆกว่า 20 จังหวัด ดังนี้ จังหวัดนครราชสีมา จังหวัดกาฬสินธุ์ จังหวัดขอนแก่น จังหวัดชัยภูมิ จังหวัดนครพนม จังหวัดบุรีรัมย์ จังหวัดบึงกาฬ จังหวัดมหาสารคาม จังหวัดมุกดาหาร จังหวัดยโสธร จังหวัดร้อยเอ็ด จังหวัดเลย จังหวัดสกลนคร จังหวัดสุรินทร์ จังหวัดศรีสะเกษ จังหวัดหนองคาย จังหวัดหนองบัวลำภู จังหวัดอุดรธานี จังหวัดอุบลราชธานี จังหวัดอำนาจเจริญ ทั้งนี้ในเรื่องของภาษาที่ใช้ในภาคอีสานนั้น อาจแตกต่างกันไปในแต่ละพื้นที่ อาทิ ภาษาหลักที่ใช้คือ ภาษาอีสาน ซึ่งถือว่า เป็นภาษาลาวสำเนียงหนึ่ง แต่ในตัวเมืองใหญ่ ๆ มักนิยมใช้ภาษากลาง ขณะที่บริเวณอีสานใต้นิยมใช้ภาษาเขมร และยังมีภาษาถิ่นอื่น ๆ เช่น ภาษาผูไท ภาษาโส้ ภาษาไทยโคราช เป็นต้น</p>
        </div>
      </div>
      <!-- Hero -->
      <div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://www.expedia.co.th/stories/wp-content/uploads/2022/05/1527028_648125181917646_1100319211_n-e1443599524102.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">งานมหกรรมโปงลาง แพรวากาฬสินธุ์</h5></b>
                        <p class="card-text">“โปงลาง” เป็นเครื่องดนตรีพื้นบ้านของภาคอีสาน และเป็นที่นิยมอย่างมากในจังหวัดกาฬสินธุ์ จนกลายเป็นสัญลักษณ์ของจังหวัด งานมหกรรมโปงลางประจำปีจึงถือเป็นงานที่สำคัญมากของชาวกาฬสินธุ์ ในงานจะมีการแสดงวงโปงลาง ประกอบการเต้นรำพื้นบ้าน การแข่งขันประชันวงโปงลางซึ่งเป็นที่สนใจอย่างมากของนักท่องเที่ยวทั้งไทยและต่างชาติ </p>
                        <a href="homeone.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://storage-wp.thaipost.net/2023/03/0-12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">ประเพณีขึ้นเขาพนมรุ้ง</h5></b>
                        <p class="card-text">ปราสาทหินเขาพนมรุ้ง สัญลักษณ์ของจังหวัดบุรีรัมย์ เป็นปราสาทหินทรายที่ได้รับอิทธิพลแบบขอมโบราณ สันนิษฐานว่าสร้างขึ้นในพุทธศตวรรษที่ 15-18 ตัวปราสาทตั้งอยู่บนปากปล่องภูเขาไฟที่ดับสนิทแล้ว ในช่วงเดือนเมษายนของทุกปีจะมีประเพณีขึ้นเขาพนมรุ้ง ไฮไลต์ของงานคือการชมแสงอาทิตย์ขึ้นและตกทะลุ 15 ช่องประตูของปราสาทพนมรุ้ง เป็นปรากฎการณ์ที่มีเพียงครั้งเดียวในหนึ่งปี </p>
                        <a href="hometwo.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://www.expedia.co.th/stories/wp-content/uploads/2022/05/10405260_715331641845714_28178440361549375_n-e1443599977651.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">ประเพณีบุญบั้งไฟ</h5></b>
                        <p class="card-text">ประเพณีบุญบั้งไฟ เป็นประเพณีที่จัดขึ้นทุกปีในจังหวัดต่างๆ ในภาคอีสาน ที่มีการปลูกข้าวเป็นอาชีพหลัก ในช่วงก่อนการเริ่มทำนา เพื่อบูชาพระยาแถนที่เชื่อว่าเป็นเทพเจ้าที่ดูแลให้ฝนตกต้องตามฤดูกาล โดยจะมีการประดับตกแต่งบั้งไฟอย่างสวยงาม และแห่ไปทั่วเมืองก่อนที่จะจุดขึ้นฟ้าเพื่อบูชาพระยาแถน จังหวัดยโสธรและร้อยเอ็ดเป็นจังหวัดที่มีชื่อเสียงที่สุดในการเฉลิมฉลองเทศกาลบุญบั้งไฟ</p>
                        <a href="homethree.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://www.expedia.co.th/stories/wp-content/uploads/2022/05/10988534_855892267786892_1234051139969265347_n-e1443600131525.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">งานประเพณีบุญหลวงและการละเล่นผีตาโขน</h5></b>
                        <p class="card-text">  งานประเพณีบุญหลวง และการละเล่นผีตาโขน เป็นงานประเพณีประจำปีของชาวอำเภอด่านซ้าย จังหวัดเลย ซึ่งจะจัดขึ้นหลังวันขึ้น 15 ค่ำ เดือน 6 ของทุกปี ในช่วงปลายเดือนมิถุนายนถึงต้นเดือนกรกฎาคม ที่ถนนหลายๆ สายของอำเภอด่านซ้าย หรือที่อื่นๆ ในจังหวัดเลย โดยเป็นงานที่มีบรรยากาศของความสนุกสนานรื่นเริงและมีชื่อเสียงอย่างมากในประเทศไทย </p>
                        <a href="homefour.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://www.expedia.co.th/stories/wp-content/uploads/2022/05/10478160_342406685936110_2351819441126659870_n.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">ประเพณีแห่เทียนพรรษา</h5></b>
                        <p class="card-text"> ประเพณีแห่งเทียนพรรษานั้น เนื่องจากสมัยก่อนพระภิกษุสงฆ์ไม่มีไฟฟ้าใช้ ชาวบ้านจึงหล่อเทียนต้นใหญ่ขึ้น เพื่อถวายพระภิกษุสงฆ์จุดให้แสงสว่างในการปฏิบัติกิจวัตรต่างๆ เป็นพุทธบูชาตลอดเวลา 3 เดือน การนำเทียนไปถวายชาวบ้านมักจัดขบวนแห่กันอย่างเอิกเกริกสนุกสนานและปฏิบัติสืบทอดกันมาจนกลายเป็นประเพณี</p>
                        <a href="homefive.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://www.baanjomyut.com/library_2/extension-1/image2555/image_1/114.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">ประเพณีไหลเรือไฟ</h5></b>
                        <p class="card-text">ประเพณีไหลเรือไฟเป็นประเพณีที่ชาวนครพนม ได้ยึดถือปฏิบัติกันมานานตั้งแต่โบราณ โดยมีความเชื่อในประเพณีว่าเนื่องมาจากการบูชารอย พระพุทธบาทการสักการะท้าวพกาพรหม การบวงสรวจพระธาตุจุฬามณี และการระลึกถึงพระคุณของพระแม่คงคาการขอฝน การเอาไฟเผาความทุกข์ และการบูชาพระพุทธเจ้าประเพณีการไหลเรือไฟบางที่เรียกว่า "ล่องเรือไฟ" "ลอยเรือไฟ" หรือ"ปล่อย เรือไฟ"</p>
                        <a href="homesix.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://mpics.mgronline.com/pics/Images/554000013089901.JPEG" class="card-img-top" alt="...">
                    <div class="card-body">
                    <b><h5 class="card-title">ประเพณีแซนโฎนตา</h5></b>
                        <p class="card-text">ชาวไทย เชื้อสายเขมรในจังหวัดสุรินทร์ ศรีสะเกษ บุรีรัมย์ มีประเพณีงานบุญเดือน ๑๐ หรืองานสารท เพื่อทำบุญบูชา รำลึก และอุทิศอาหาร ข้าวของเครื่องใช้แก่บรรพบุรุษ ปู่ย่า ตายาย หรือบุพการีผู้ล่วงลับไปแล้ว แต่แตกต่างกันในขั้นตอนพิธีกรรม ปัจจุบันงานแซนโฎนตามีการปฏิบัติกันทั้งในครอบครัว หมู่บ้าน และจังหวัด จะทำพิธีในวันแรม ๑๔ ค่ำ เดือน ๑๐ ของทุกปี</p>
                        <a href="homeseven.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://tatapi.tourismthailand.org/tatfs/IMAGE/Event/Picture/E0001926.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b><h5 class="card-title">ประเพณีบุญผะเหวด</h5></b>
                        <p class="card-text">"บุญผะเหวด" จัดอยู่ในฮีตที่ 4 หรือ บุญเดือนสี่ คำว่า "ผะเหวด" เป็นภาษาอีสาน มีที่มาจากงานประเพณีพระเวสสันดรชาดกในภาษาภาคกลาง หรืองานบุญมหาชาติ ที่เป็นพระนามขององค์สัมมาสัมพระพุทธเจ้าในชาติสุดท้ายก่อนที่พระองค์จะประสูติเป็นเจ้าชายสิทธัตถะและตรัสรู้ด้วยพระองค์เอง เป็นศาสดาของศาสนาพุทธ พระเวสสันดร </p>
                        <a href="home_eight.php" class="btn btn-primary">อ่านเพิ่มเติม...</a>
                    </div>
                </div>
            </div>
          </div>
          </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>