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
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="POST" class="form-validate" action="./assets/php/redirect.php" method="POST" >
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                        
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <div class="form-group">
                          <select name="user_type" id="" class="form-control select" >
                          <option hidden disabled selected value> Foydalanuvchi turi</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                          </select>
                         </div>

                      <input type="submit" id="login" class="btn btn-primary" value="Login">

                  
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
         <p>2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/front.js"></script>
  </body>
</html>

