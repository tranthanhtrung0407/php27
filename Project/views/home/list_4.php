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
              <li> <a href="?admin=admin&mod=home&act=index">Trang chủ </a>
                
              </li>
              <li class="dropdown"> <a href="19_category_masonry.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"> Tổng hợp </a>
                <ul class="dropdown-menu">
                  <li> <a href="?admin=admin&mod=home&act=homCategory">Danh mục </a> </li>
                  <li> <a href="?admin=admin&mod=home&act=postImg">Ảnh</a> </li>
                  <li> <a href="?admin=admin&mod=home&act=listPost">Bài viết</a></li>
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
                    </div> -->
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
            <span class="sb-icon-search" ><a href="?admin=auth&mod=login&act=loginForm"><b>LOGIN</b>
           </a>

            </span>
          </form>
        </div>
      </nav>
    </div>
  </header>
  
  <!--======= CONTENT =========-->
  <div class="content">
    <div class="container">
      <div class="inner-pages"> 
        <!--======= ABOUT US =========-->
        <div class="about-us">
          <div class="pages-round"> 
             <?php foreach ($oneUsers as $user) { ?>
            <!--======= IMAGE =========--> 
            <img class="img-responsive" src="uploads/<?= $user['avatar'] ?>" alt=""> 
            
            <!--======= TEXT INFO =========-->
            <div class="text-info">
              <h2><?= $user['name'] ?></h2>
              <h2><?= $user['email'] ?></h2>
            </div>
              <?php } ?>
          </div>
          
          <!--======= DETAILS =========-->          
          <div class="infom">
            <p>Đảo Hải Tặc là bộ manga dành cho lứa tuổi thiếu niên của tác giả Oda Eiichiro, được đăng định kì trên tạp chí Weekly Shōnen Jump, ra mắt lần đầu trên ấn bản số 34 vào ngày 19 tháng 7 năm 1997. Bản tankōbon của truyện do Shueisha phát hành với tập đầu tiên vào ngày 24 tháng 12 năm 1997. One Piece kể về cuộc hành trình của Monkey D. Luffy - thuyền trưởng của băng hải tặc Mũ Rơm và các đồng đội của cậu. Luffy tìm kiếm vùng biển bí ẩn nơi cất giữ kho báu lớn nhất thế giới One Piece, với mục tiêu trở thành Tân Vua Hải Tặc.</p>
          </div>
          
        
          <section class="contact"> 
            
            <!--======= CONTACT FORM =========-->
            <div class="contact-form"> 
              
              <!--======= Success Msg =========-->
              <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
              
              <!--======= FORM  =========-->
              <form role="form" id="contact_form" method="post" onSubmit="return false">
                <div class="row">
                  <div class="col-md-6">
                    <ul class="row">
                      
                      <!--======= NAME =========-->
                      <li class="col-sm-12">
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="font-montserrat">your name *</label>
                          </div>
                          <div class="col-xs-8">
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                          </div>
                        </div>
                      </li>
                      
                      <!--======= EMAIL =========-->
                      <li class="col-sm-12">
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="font-montserrat">your e-mail * </label>
                          </div>
                          <div class="col-xs-8">
                            <input type="text" class="form-control" name="email" id="email" placeholder="">
                          </div>
                        </div>
                      </li>
                      
                      <!--======= PHONE =========-->
                      <li class="col-sm-12">
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="font-montserrat">Phone * </label>
                          </div>
                          <div class="col-xs-8">
                            <input type="text" class="form-control" name="company" id="company" placeholder="">
                          </div>
                        </div>
                      </li>
                      
                      <!--======= SUBJECT =========-->
                      <li class="col-sm-12">
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="font-montserrat">Subject </label>
                          </div>
                          <div class="col-xs-8">
                            <input type="text" class="form-control" name="website" id="website" placeholder="">
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  
                  <!--======= MESSAGE =========-->
                  <div class="col-md-6">
                    <ul class="row">
                      <li class="col-sm-12">
                        <div class="row">
                          <div class="col-xs-4">
                            <label>message </label>
                          </div>
                          <div class="col-xs-8">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                          </div>
                        </div>
                      </li>
                      <li class="col-sm-12">
                      <div class="row">
                       <div class="col-xs-9 pull-right">
                        <button type="submit" value="submit" class="btn font-montserrat" id="btn_submit" onClick="proceed();">Send message</button>
                        </div>
                       </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
          </section>
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