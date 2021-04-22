<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thanh Trung | Project Anime</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Demo Olimpia | Personal Blog HTML5 Template">
<meta name="description" content="Demo Olimpia | Personal Blog HTML5 Template">
<meta name="author" content="M_Adnan">

<!-- FONTS ONLINE -->

<link href='public/css/css.css' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="public/css/main.css" rel="stylesheet" type="text/css">
<link href="public/css/style.css" rel="stylesheet" type="text/css">
<link href="public/css/responsive.css" rel="stylesheet" type="text/css">
<link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="public/assets/images/t.png" type="image/x-icon">
</head>
<body>
<div id="wrap"> 
  <header class="fixed-top">
    <div class="container"> 
     <nav>               
        <!-- Nav Responsive -->
        <div class="collapse navbar-collapse" id="nav-responsive"> 
          <!-- NavBar -->
          <div class="yamm navbar"> 
            <!-- Nav Start -->
            <ul class="nav" >
              <li> <a href="?admin=admin&mod=home&act=index"> Home </a>
                
              </li>
              <li class="dropdown"> <a href="19_category_masonry.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Category Styles </a>
                <ul class="dropdown-menu">
                  <li> <a href="?admin=admin&mod=home&act=homCategory">Home Category </a> </li>
                  <li> <a href="?admin=admin&mod=home&act=postImg">Post IMG</a> </li>
                  <li> <a href="?admin=admin&mod=home&act=listPost">List Post</a></li>
                </ul>
              </li>
              <!-- Mega Menu -->
              <li class="dropdown yamm-fullwidth"> <a href="17_category_list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Design </a>
                <ul class="dropdown-menu">
                  <li class="grid-nav"> 
                    <!-- Row -->
                   <div class="row"> 
                       <?php foreach ($trunggggCategorys as $category) { ?>
                      <div class="col-xs-3">
                        <div class="post-img"> <img class="img-responsive" src="uploads/<?= $category['thumbnail'] ?>" alt="" > <a href="#."> <?= $category['name']  ?><span><?= $category['description']  ?></span> </a> </div>
                      </div>
                    <?php } ?>
                      <!-- POST 2 -->                      
                    </div> -->
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Pages </a>
                <ul class="dropdown-menu">
                  <li> <a href="21_about.html">About</a></li>
                  <li> <a href="?admin=admin&mod=home&act=conTact">Contacts Us</a> </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Nav Start End --> 
        </div>
        
        <!--======= SEARCH =========-->
        <div id="sb-search" class="sb-search">
          <form>
            <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search"><i class="fa fa-search"></i></span>
          </form>
        </div>
      </nav>
    </div>
  </header>
  
  <!--======= BANNER =========-->
  <div id="banner" class="bnr-5-home"> 
    <!--======= BANNER SLIDER =========-->
    <div class="bnr-slide-2"> 
      <?php foreach ($threeCategorys as $category) { ?>
      <div class="item"> <img class="img-responsive" src="uploads/<?= $category['thumbnail'] ?>" alt="" >
        <div class="item-info">
          <div class="container"><h2><a href="#." class="bnr-text"> <span><?= $category['name'] ?></span> <span class="tittle-main"><?= $category['description'] ?></span> <span>by Duy Trung, March 06, 2007</span> </a> </div>
        </div>
      </div>
       <?php } ?>
      <!--======= SLIDER 2 =========-->
    </div>
  </div><br>
  
  <!--======= BLOG SINGLE ROW =========-->
  <section class="layout-10">
    <div class="post-section">
      <div class="container-fluid"> 
        
        <!--======= BLOG POST =========-->
        <div class="row"> 
           <?php foreach ($tCategorys as $category) { ?>
          <div class="col-md-6 no-padding"> <img src="uploads/<?= $category['thumbnail'] ?>" alt="" > </div>
          <!--======= BLOG TEXT =========-->
          <div class="col-md-6 no-padding">
            <article>
              <section class="right">
                <aside> <h2><a href="#."> <?= $category['name'] ?> </a></h2></span> 
                  <!-- Tittle -->
                
                  <!-- details -->
                  <p><?= $category['description'] ?></p>
                   <?php } ?>
                  
                  <!-- Button --> 
                  <a href="#." class="btn">Continue reading…</a></aside>
              </section>
            </article>
          </div>
        </div><br>
        
        <!--======= BLOG POST =========-->
        <div class="row"> 
          <!--======= BLOG TEXT =========-->
          <div class="col-md-6 no-padding">
            <article>
              <section class="left">
                <aside> <span class="post-tags"><a href="#."></a>  </span> 
                 <?php foreach ($trCategorys as $category) { ?>
                  <h2><a href="#."> <?= $category['name'] ?> </a></h2>
                 
                  <!-- details -->
                  <p><?= $category['description'] ?></p>
                  <!-- Social Share -->
                  
                  <a href="#." class="btn">Continue reading…</a> </aside>
              </section>
            </article>
          </div>
          <!--======= BLOG IMAGE =========-->
          <div class="col-md-6 no-padding"> <img src="uploads/<?= $category['thumbnail'] ?>" alt="" > </div>
          <?php } ?>
        </div>
      </div><br><br>
      
      
      
      <!--======= CONTAINER FUILD =========-->
      <div class="container-fluid"> 
        
        <!--======= BLOG POST =========-->
        <div class="row"> 
          <?php foreach ($truCategorys as $category) { ?>
          <div class="col-md-6 no-padding"> <img src="uploads/<?= $category['thumbnail'] ?>" alt="" > </div>
          <!--======= BLOG TEXT =========-->
          <div class="col-md-6 no-padding">
            <article>
              <section class="right">
                <aside> <h2><a href="#."> <?= $category['name'] ?> </a></h2></span> 
                  <!-- Tittle -->
                
                  <!-- details -->
                  <p><?= $category['description'] ?></p>
                   <?php } ?>
                  
                  <!-- Button --> 
                  <a href="#." class="btn">Continue reading…</a></aside>
              </section>
            </article>
          </div>
        </div><br><br>
        
        <!--======= BLOG POST =========-->
        <div class="row"> 
          <!--======= BLOG TEXT =========-->
          <div class="col-md-6 no-padding">
            <article>
              <section class="left">
                <aside> <span class="post-tags"><a href="#."></a>  </span> 
                 <?php foreach ($trunCategorys as $category) { ?>
                  <h2><a href="#."> <?= $category['name'] ?> </a></h2>
                 
                  <!-- details -->
                  <p><?= $category['description'] ?></p>
                  <!-- Social Share -->
                  
                  <a href="#." class="btn">Continue reading…</a> </aside>
              </section>
            </article>
          </div>
          <!--======= BLOG IMAGE =========-->
          <div class="col-md-6 no-padding"> <img src="uploads/<?= $category['thumbnail'] ?>" alt="" > </div>
          <?php } ?>
        </div>
      </div>
      
      <!--======= lOAD MORE =========-->
     
    </div>
  </section>
  
  <!--======= ADD UNIT =========-->
  
  
  <!--======= FOOTER =========-->
  <div class="footer-2 side-bar pattern-bg">
    <div class="container">
      <div class="row"> 
        <!--======= ABOUT ME =========-->
        <div class="col-md-4">
          <div class="about-small">
            <h6>Author of One Piece</h6>
              <hr>
              
              <?php foreach ($oneUsers as $user) { ?>
              <div class="avatar"> <img src="uploads/<?= $user['avatar'] ?>" alt=""> </div>
              <h5><?= $user['name'] ?></h5>
               <?php } ?>
              <p>One Piece là một bộ truyện đang được rất nhiều bạn trẻ săn đón. Chúng tôi luôn cố gắng để giúp mọi người tận hưởng từng cảm giác khi xem phim. Mong mọi người ủng hộ FanPage One Piece nhiều nhé!!!</p>
            
            <!-- SOCIAL ICONS ===========================================-->
            <ul class="social_icons">
              <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
              <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
              <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
              <li class="instagram"><a href="#."><i class="fa fa-instagram"></i> </a></li>
              <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
              <li class="pinterest"><a href="#."><i class="fa fa-pinterest"></i> </a></li>
              <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
            </ul>
          </div>
        </div>
        
        <!--======= PAPULAR POST =========-->
        <div class="col-md-4">
          <div class="papu-post">
            <h6>Popular Category</h6>
            <hr>
            <ul>
              <?php foreach ($trungCategorys as $category) { ?>
              <li class="media">
                 
                <div class="media-left"> <a href="#"> <img class="media-object" src="uploads/<?= $category['thumbnail'] ?>" alt=""></a> </div>
                <div class="media-body"> <a class="media-heading" href="#."><?= $category['name'] ?></a> <span>by Duy Trung, March 06, 2007</span> </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        
        <!--======= INSTGRAM FEED =========-->
        <div class="col-md-4"> 
          
          <!--======= INSTGRAM FEED =========-->
          <div class="instrgam-feed">
            <h6>News Category</h6>
            <hr>
            <ul>
              <?php foreach ($trunggCategorys as $category) { ?>
              <li><a href="#."><img src="uploads/<?= $category['thumbnail'] ?>" alt=""></a></li>
              
               <?php } ?>
            </ul>
          </div>
          
          <!--======= NEWSLETTER =========-->
          <h6 class="margin-t-40">Bản Tin</h6>
          <hr>
          <div class="newsletter">
            <p>Nhận email của mỗi bài viết mới! Chúng tôi sẽ không bao giờ chia sẻ địa chỉ của bạn.</p>
            <form>
              <input type="email" placeholder="Nhập email ..." required>
              <button type="submit">Đăng kí</button>
            </form>
          </div>
        </div>
      </div>
      
      <!--======= SOCIAL SECTION =========-->
      <div class="social-section">
            <ul>
              <li> <a href="#."><i class="fa fa-facebook"></i> Facebook</a> </li>
              <li> <a href="#."><i class="fa fa-twitter"></i> twitter</a> </li>
              <li> <a href="#."><i class="fa fa-instagram"></i> instagram</a> </li>
              <li> <a href="#."><i class="fa fa-google-plus"></i> google +</a> </li>
              <li> <a href="#."><i class="fa fa-pinterest-p"></i> pinterest</a> </li>
              <li> <a href="#."><i class="fa fa-linkedin"></i> linkedin</a> </li>
            </ul>
      </div>
    </div>
  </div>
  
  <!--======= FLICKERS =========-->
  <section class="f-flicker">
    <h6>Đảo hải tặc One Piece</h6>
    
    <!--======= FLICKERS IMAGES =========-->
      <ul class="flikr-list">
         <?php foreach ($trungggCategorys as $category) { ?>
        <li> <a href="#."><img class="img-responsive" src="uploads/<?= $category['thumbnail'] ?>" alt="" ></a> </li>
        
      <?php } ?>
      </ul>
    
    <p><h4>© 2007 - Tran Thanh Trung - Anime One Piece.</h4></p>
  </section>
</div>
<script src="public/js/jquery-1.11.0.min.js"></script> 
<script src="public/js/bootstrap.min.js"></script> 
<script src="public/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="public/js/owl.carousel.min.js"></script> 
<script src="public/js/masonry.pkgd.min.js"></script> 
<script src="public/js/jquery.imagesloaded.min.js"></script> 
<script src="public/js/uisearch.js"></script> 
<script src="public/js/main.js"></script>
</body>
</html>