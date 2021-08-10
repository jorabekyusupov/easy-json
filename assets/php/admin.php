<?php 
session_start();

     if (!($_SESSION['username'] == 'admin' && $_SESSION['password'] == 'admin'  && $_SESSION['user_type'] == 'Admin') && empty($_SESSION['verufy'])) {
    
       header("Location: /index.php");
     } 
  
 
    ?>
  <!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="../css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
           
        
            <!-- Tasks-->
         
            <!-- Tasks end-->
            <!-- Megamenu-->
      
            <!-- Megamenu end     -->
            <!-- Languages dropdown    -->
        
            <!-- Log out               -->
            <form action="./logout.php" method="POST">
            
            <div class="list-inline-item logout"> <a id="logout" href="./logout.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
            
            </form>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="../img/photo_2021-07-01_12-23-39.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <ul class="list-unstyled">
             <li><a href="user.php">User</a></li>
             <li><a href="prodlist.php">Product Table</a></li>
       </ul>
       
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
     
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Product            </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
       
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Product</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" action="./post.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">ID</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="id">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Title</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="Title">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Discription</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="Discription">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Price</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="Price">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Image</label>
                        <div class="col-sm-9">
                          <input type="file" class="input-file-control" name="image">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../js/front.js"></script>
  </body>
</html>