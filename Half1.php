<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUB-Games Half-Life: Alyx</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index1.php">
                <i class="fas fa-film mr-2"></i>
                &nbsp; Welcome <?php echo $_SESSION['name'];?> to Pub-Games
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1" href="index1.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 active" aria-current="page" href="indexCate1.php">หมวดหมู่</a>
					
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="index.php">เว็บบอร์ด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact1.php">ติดต่อAdmin</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-4" href="login.php">logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Half-Life: Alyx</h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="img/img-01.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
						จีนกล่าวไว้ว่า ล้างแค้น 10 ปียังไม่สาย แต่แฟนๆ Half-Life บอก รอ 12 ปี โคตรสายเลย ภาคใหม่ของเกมยิงจาก Valve ในที่สุดก็ประกาศทำภาคใหม่ซะทีหลังจากรอมานานมากถึง 12 ปี แต่บางคนก็อาจจะผิดหวัง เพราะ Half-Life Alyx ไม่ใช่เกมภาคต่อแต่เป็นภาคเสริม ที่ทำเป็นแนว VR เนื้อเรื่องระหว่าง Half-Life 1 กับ Half-Life 2 แต่ทาง Valve รับประกันว่า แม้จะเป็นภาคเสริม เนื้อเรื่องของ Half-Life Alyx ก็สนุกน่าติดตาม และเล่นได้ยาวๆไม่แพ้ Half-Life 2 แน่นอน
                    </p>
                  


                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">สามารถโหลดตัวเกมส์ได้ที่ <a href="https://store.steampowered.com/app/546560/HalfLife_Alyx/" target="_game" rel="stream">Stream</a></h3>
                       
                  </div>
                    
              </div>
            </div>
        </div>

        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                เกมส์ใหม่มาแรง
            </h2>

        </div>
       <div class="row tm-mb-90 tm-gallery">
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-03.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Among Us</h2>
                        <a href="AmongUs1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                <strong>Among Us</strong> </div>
            </div>
			
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-41.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Monster Hunter</h2>
                        <a href="MonsterHunter1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                <strong>Monster Hunter</strong> </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-05.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>One Punch Man</h2>
                        <a href="OneP1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                <strong>One Punch Man</strong> </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/img-06.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Ori and the Will of the Wisps</h2>
                        <a href="Ori1.php">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                <strong>Ori and the Will of the Wisps</strong> </div>
				</div>
        

        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
          
                <a href="index - MG1.php" class="btn btn-primary tm-btn-next">ดูเพิ่มเติม</a>
            </div>            
        </div>

</div> 
    </div> 

       <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">เกี่ยวกับ PUB-Games</h3>
                    <p>PUB-Games เป็นเว็บไซต์ที่รวบรวมข้อมูลสำหรับเกมส์ เพื่อให้ผู้ที่สนใจเกี่ยวกับเกมส์ หรือผู้ที่สนใจอยากเล่นเกมส์ที่คนเค้านิยมเล่นกันได้หาข้อมูลในเว็บนี้ได้อย่างง่ายได้เพียงแค่ใช้ลูกศรเลื่อนหา</p>
                </div>
               
                
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 PUB-Games Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by PUB-Games</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>