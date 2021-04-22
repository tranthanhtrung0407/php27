
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Thanh Trung</title>
    
    <link rel="stylesheet" href="public/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="public/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="public/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="public/assets/css/app.css">
    <link rel="shortcut icon" href="public/assets/images/t.png" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="public/assets/images/t.png" alt="" srcset="">
                </div>
    <div class="sidebar-menu">
        <ul class="menu">
                <li class='sidebar-title'>Trang Quản Trị One Piece</li>
                <li class="sidebar-item active ">
                    <a href="?admin=admin&mod=admin&act=admin" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Quản lý Người dùng</span>
                    </a>
                    <ul class="submenu ">                       
                        <li>
                            <a href="index.php?admin=admin&mod=user&act=list"><i data-feather="eye" width="16"></i>&nbsp; Xem chi tiết Người dùng</a>
                        </li>                      
                        <li>
                            <a href="index.php?admin=admin&mod=user&act=create"><i data-feather="plus-circle" width="16"></i>&nbsp; Thêm mới Người dùng</a>
                        </li>                       
                        
                    </ul>                                                         
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file" width="20"></i> 
                        <span>Quản lý Bài viết</span>
                    </a>
                    <ul class="submenu ">                       
                        <li>
                            <a href="index.php?admin=admin&mod=post&act=list"><i data-feather="eye" width="16"></i>&nbsp; Xem chi tiết Bài viết</a>
                        </li>                      
                        <li>
                            <a href="index.php?admin=admin&mod=post&act=create"><i data-feather="plus-circle" width="16"></i>&nbsp; Thêm mới Bài viết</a>
                        </li>                       
                        
                    </ul>                                                         
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i> 
                        <span>Quản lý Danh mục</span>
                    </a>
                    <ul class="submenu ">                       
                        <li>
                            <a href="index.php?admin=admin&mod=category&act=list"><i data-feather="eye" width="16"></i>&nbsp; Xem chi tiết Danh mục</a>
                        </li>                      
                        <li>
                            <a href="index.php?admin=admin&mod=category&act=create"><i data-feather="plus-circle" width="16"></i>&nbsp; Thêm mới Danh mục</a>
                        </li>                       
                        
                    </ul>                                                         
                </li>
                
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="<?= "uploads/".$_SESSION['auth']['avatar']?>" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, <?= $_SESSION['auth']['name'] ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="index.php?admin=auth&mod=logout&act=logout"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>