
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
              <li> <a href="?admin=admin&mod=home&act=index"> Trang chủ </a>
                
              </li>
              <li class="dropdown"> <a href="19_category_masonry.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Tổng hợp </a>
                <ul class="dropdown-menu">
                  <li> <a href="?admin=admin&mod=home&act=homCategory">Danh mục </a> </li>
                  <li> <a href="?admin=admin&mod=home&act=postImg">Ảnh</a> </li>
                  <li> <a href="?admin=admin&mod=home&act=listPost"> Bài viết</a></li>
                </ul>
              </li>
              <!-- Mega Menu -->
              <li class="dropdown yamm-fullwidth"> <a href="17_category_list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Thể loại </a>
                <ul class="dropdown-menu">
                  <li class="grid-nav"> 
                    <!-- Row -->
                    <div class="row"> 
                       <?php foreach ($trePosts as $post) { ?>
                      <div class="col-xs-3">
                        <div class="post-img"> <img class="img-responsive" src="uploads/<?= $post['thumbnail'] ?>" alt="" > <a href="#."> <?= $post['title']  ?><span><?= $post['description']  ?></span> </a> </div>
                      </div>
                    <?php } ?>
                      <!-- POST 2 -->                      
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Giới thiệu </a>
                <ul class="dropdown-menu">
                 
                  <li> <a href="?admin=admin&mod=home&act=conTact">Giới thiệu</a> </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Nav Start End --> 
        </div>
        
        <!--======= SEARCH =========-->
        <div id="sb-search" class="sb-search">
          <form>
            
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search" ><a href="?admin=auth&mod=login&act=loginForm"><b>LOGIN</b></a></span>
          </form>
        </div>
      </nav>
    </div>
  </header>
  
  <!--======= CONTENT =========-->
  <div class="content">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h2>One Piece Anime</h2>
       
      </div>
      <div class="row"> 
        <!--======= POST SECTION =========-->
        <div class="col-md-8">
          <div class="post-section">
            <ul class="row">
               <?php foreach ($tttPosts as $post) { ?>
              <!--======= BLOG POST =========-->
              <li class="col-sm-12">
                <article> 
                  <!-- Image Post -->
                  <div class="img-post"> <img class="img-responsive" src="uploads/<?= $post['thumbnail'] ?>" alt="" ></div>
                  <div class="style-up"> 
                    <!-- Content -->
                    <aside> <span class="post-tags"><a href="#."><h2><?= $post['title'] ?></h2></a> </span> 
                      <!-- Tittle -->
                     
                      <!-- details -->
                      <p><?= $post['content'] ?></p>
                      
                      <!--======= SOCIAL SHARES =========-->
                      <div class="share-social"> <i class="fa fa-share-alt"></i> 
                        <!--======= SOCIAL ICONS =========-->
                        <ul class="social_icons">
                          <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                          <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                          <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
                          <li class="pinterest"><a href="#."><i class="fa fa-pinterest"></i> </a></li>
                          <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
                        </ul>
                      </div>
                      
                      <!-- Button --> 
                     
                    </aside>
                  </div>
                </article>
              </li>
               <?php } ?>
              <!--======= BLOG POST =========-->
              
            </ul>
            
            <!--======= PAGINATION =========-->
            
          </div>
        </div>
        <!--======= POST SECTION END =========--> 
        
        <!--======= SIDE BAR =========-->
        <div class="col-md-4">
          <div class="side-bar"> 
            
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
            
            <!--======= TEXT WIDGET =========-->
            <div class="about-small margin-t-40">
              <h6>One Piece Introduce</h6>
              <hr>
              <p>Đảo Hải Tặc là bộ manga dành cho lứa tuổi thiếu niên của tác giả Oda Eiichiro, được đăng định kì trên tạp chí Weekly Shōnen Jump, ra mắt lần đầu trên ấn bản số 34 vào ngày 19 tháng 7 năm 1997. Bản tankōbon của truyện do Shueisha phát hành với tập đầu tiên vào ngày 24 tháng 12 năm 1997. One Piece kể về cuộc hành trình của Monkey D. Luffy - thuyền trưởng của băng hải tặc Mũ Rơm và các đồng đội của cậu. Luffy tìm kiếm vùng biển bí ẩn nơi cất giữ kho báu lớn nhất thế giới One Piece, với mục tiêu trở thành Tân Vua Hải Tặc.

One Piece cũng được chuyển thể sang một vài loại hình truyền thông khác nhau. Một OVA được hãng Production I.G sản xuất vào năm 1998. Tiếp đó, phiên bản anime dài tập do hãng Toei Animation thực hiện, bắt đầu lên sóng truyền hình Nhật Bản vào năm 1999. Toei cũng sản xuất 11 phim hoạt hình, một OVA và 5 chương trình truyền hình đặc biệt liên quan. Một vài công ty đã phát triển nhiều sản phẩm khác dựa vào truyện như thẻ game, video game. Bộ manga phiên bản tiếng Anh được cấp phép cho hãng Viz Media phát hành ở thị trường Bắc Mỹ, hãng Gollancz Manga ở Anh Quốc, Madman Entertainment ở Australia và New Zealand. Ở Bắc Mỹ, bộ anime được cấp phép bản địa hóa và phân phối bằng tiếng Anh bởi hãng Funimation Entertainment.</p>
            
            <!--======= ADD UNIT =========-->
            <div class="add-unit margin-t-40">
              <h6>Advertisement Anime</h6>
              <hr>
              <img class="trung" src="public/images/789.jpg" alt="">
            </div>
            
        </div><br>
        <span style="font-size: 13px;">Chi tiết xin liên hệ đường dây nóng</span><br> 
            <i><span>Hotline: 0394677654</span> </i>
          </div>
        <!--======= / SIDE BAR END =========--> 
      </div>
      <!--======= / SOCIAL SECTION =========--> 
    </div>
  </div>
  
  <!--======= FOOTER =========-->
  
  
  <!--======= FLICKERS =========-->
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