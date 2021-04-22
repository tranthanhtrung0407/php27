
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

<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
  <!--======= SIDE BAR =========-->
  <div class="col-md-3 no-padding">
    <div class="left-header">




      <div class="side-bar"> 
    
  
        <!-- HEADER ===========================================-->
        <header> 
          <!--======= LOGO =========-->
          <a class="navbar-brand" href="#"><img class="img-responsive" src="images/logo-left.png" alt="" ></a>

          <!--======= NAVIGATION =========-->
          <h6>One Piece</h6>
          <hr>
          <nav> 
            <!-- NavBar Responsive Btn -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-responsive"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i> </button>
            
            <!-- Nav Responsive -->
            <div class="collapse navbar-collapse" id="nav-responsive"> 
              <!-- NavBar -->
              <div class="yamm navbar"> 
                <!-- Nav Start -->
                <ul class="nav">
                  <li> <a href="?admin=admin&mod=home&act=index"> Home </a>
                    
                  </li>
                  
                  <li class="dropdown"> <a href="19_category_masonry.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Category Styles </a>
                    <ul class="dropdown-menu">
                      
                      <li> <a href="?admin=admin&mod=home&act=homCategory">Home Category</a> </li>
                      <li> <a href="?admin=admin&mod=home&act=postImg">Post IMG</a></li>
                      <li> <a href="?admin=admin&mod=home&act=listPost">List Post</a> </li>
                      
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
          </nav>
        </header>
        
        <!--======= ABOUT ME =========-->
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
        
        <!--======= INSTGRAM FEED =========-->
        <div class="instrgam-feed margin-t-40">
          <h6>8 posts views</h6>
              <hr>
              <?php foreach ($ttttPosts as $post) { ?>
              <ul>
                <li><a href="#."><img src="uploads/<?= $post['thumbnail'] ?>" alt=""></a></li>               
              </ul>
              <?php } ?>
        </div>
        
        <!--======= PAPULAR POST =========-->
        <div class="papu-post margin-t-40">
          <h6>5 News Posts</h6>
              <hr>
              <?php foreach ($ttPosts as $post) { ?>
              <ul>
                <li class="media">
                  <div class="media-left"> <a href="#"> <img class="media-object" src="uploads/<?= $post['thumbnail'] ?>" alt=""></a> </div>
                  <div class="media-body"> <a class="media-heading" href="#"><?= $post['description']; ?></a> <span>by Duy Trung, March 06, 2007</span> </div>
                </li>
              </ul>
              <?php } ?>
        </div>
        
        <!--======= NEWSLETTER =========-->
        <div class="newsletter margin-t-40">
          <h6>Bản tin</h6>
          <hr>
          <div class="newsletter">
            <p>Nhận email của mỗi bài viết mới! Chúng tôi sẽ không bao giờ chia sẻ địa chỉ của bạn.</p>
            <form>
              <input type="email" placeholder="Nhập email ..." required >
              <button type="submit">Đăng kí</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--======= CONTENT SECTION =========-->
  <div class="col-md-9 dark-petrn">
    <div class="row">
      <div class="col-md-9 no-padding"> 
        
        <!--======= Post Section =========-->
        <div class="post-section"> 
          
          <!--======= Pages 10 Style =========-->
          <div class="bnr-3-home home-9-style">
            <ul>
              
              <?php foreach ($trtPosts as $post) { ?> 
              <li> <img src="uploads/<?= $post['thumbnail'] ?>" alt="" >
  
              </li>
              <br>
              <?php  } ?> 
            </ul>
            
            <!--======= LOAD MORE  =========-->
            
          </div>
        </div>
      </div>
      
      <!--======= RIGHT NAVIGATION  =========-->
      <div class="col-md-3 no-padding">
        <section class="right-nav"> 
          
          <!--======= RIGHT SIDE BAR  =========-->
          
          <div class="navi_right" id="nav_right"> <a href="#." class="nav_close"><i class="navi-ic fa fa-navicon"></i> <i class="navi-clo fa fa-close" ></i></a>
            <div class="side-bar-right">


 
              <div class="side-bar"> 
                
                <!--======= CATEGORIES =========-->
                <div class="cate margin-t-40">
                  <h6>Posts</h6>
                  <hr>
                  <?php foreach ($trPosts as $post) { ?>
                  <ul>
                    <li><a href="#."><?= $post['title'] ?><span><?= $post['view_count'] ?></span></a></li>
                    
                  </ul>
                    <?php } ?>
                </div>
                
                
                
                
                <!--======= FEATURED POSTS =========-->
                <div class="post-section feat-post margin-t-80">
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>
  <section class="f-flicker">
    <h6>Đảo Hải Tặc One Piece</h6>
    
    <!--======= FLICKERS IMAGES =========-->
    <ul class="flikr-list">
     <?php foreach ($tttPosts as $post) { ?> 
        <li> <a href="#."><img class="img-responsive" src="uploads/<?= $post['thumbnail']; ?>" alt="" ></a> </li>
      <?php }  ?>
      
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