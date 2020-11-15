<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="../project3/public/img/favicon.png" rel="icon">
  <link href="../project3/public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{url('public')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{url('public')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet">
  <link href="{{url('public')}}/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="{{url('register')}}" method="post">
        @csrf
        <h2 class="form-login-heading">REGISTER</h2>
        <div class="login-wrap">
        @include('template.utils.notif')
          <label>Nama</label>
          <input type="text" class="form-control" placeholder="Nama" name="nama">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Email" name="email">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <input type="checkbox" value="remember-me"> Remember me
          <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
          </span>
          <input type="submit" class="btn btn-block btn-success" value="REGISTER">
          <hr>
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?
            <br/>
            <a href="#">Create an account</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>