<?php
session_start();
?>
<html>
<head>
<title>webShop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
    $(document).ready(function() {
        var docHeight = $(document).height();
        var footerHeight = $('#footer').height();
        var footerTop = $('#footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('#footer').css('margin-top', (docHeight - footerTop - 55) + 'px');
        }
    });
</script>
<script>
    var start_time = +new Date();
    window.onload = function() {
        var r = (+new Date() - start_time) / 1000;
        document.getElementById("render").innerHTML = "Render time: " + r + "s";
    };
</script>

<style>
a:hover, a:visited, a:link, a:active
{
    text-decoration: none;
}
@font-face {
    font-family: Bariol;
    src: url(bariol.otf);
}
body {
    background: #EDEDED !important;
}
#footer {
    height: 40px;
    padding: 15px 0 0 0;
    border-top: 1px solid #CAD0D6;
    margin-top: 30px;
}
.footerText {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    text-align: center;
    color: #3D3D3D;
}
#home {
    width: 75%;
    font: Bariol;
    font-size: 18px;
    -webkit-user-select: none;
    -moz-user-select: none;
	max-height: 750px;
}
.panel-heading {
    background: linear-gradient(#434343, #2B2B2B) !important;
    color: #A4A4A4 !important;
}
.loginmodal-container {
    padding: 30px;
    max-width: 350px;
    width: 100% !important;
    background-color: #F7F7F7;
    margin: 0 auto;
    border-radius: 2px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    font-family: roboto;
}
.loginmodal-container h1 {
    text-align: center;
    font-size: 1.8em;
    font-family: roboto;
}
.loginmodal-container input[type=submit] {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    position: relative;
}
.loginmodal-container input[type=text],
input[type=password] {
    height: 44px;
    font-size: 16px;
    width: 100%;
    margin-bottom: 10px;
    -webkit-appearance: none;
    background: #fff;
    border: 1px solid #d9d9d9;
    border-top: 1px solid #c0c0c0;
    padding: 0 8px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.loginmodal-container input[type=text]:hover,
input[type=password]:hover {
    border: 1px solid #b9b9b9;
    border-top: 1px solid #a0a0a0;
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.loginmodal {
    text-align: center;
    font-size: 14px;
    font-family: 'Arial', sans-serif;
    font-weight: 700;
    height: 36px;
    padding: 0 8px;
    -webkit-user-select: none;
}
.loginmodal-submit {
    border: 0px;
    color: #fff;
    text-shadow: 0 1px rgba(0, 0, 0, 0.1);
    background-color: #4d90fe;
    padding: 17px 0px;
    font-family: roboto;
    font-size: 14px;
}
.loginmodal-submit:hover {
    border: 0px;
    text-shadow: 0 1px rgba(0, 0, 0, 0.3);
    background-color: #357ae8;
}
.loginmodal-container a {
    text-decoration: none;
    color: #666;
    font-weight: 400;
    text-align: center;
    display: inline-block;
    opacity: 0.6;
    transition: opacity ease 0.5s;
}
#login_error{
	color: #E50000;
}
#register_error{
	color: #E50000;
}
.box {
    background: #fff;
    background: rgba(255,255,255,0.9);
	top: -10px;
}
.slides {
  width: 100%;
  height: 100%;
  max-height:100%;
}
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
</style>
</head>

<body>
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
					<div id="login_error"></div>
				  <form action="login.php" method="POST">
					<fieldset>
					<input id = "user" type="text" name="username" placeholder="Username" value="">
					<input id="pass" type="password" name="password" placeholder="Password" value="">
					<input type="submit" class="login loginmodal-submit">
					
					</fieldset>
				  </form>
				</div>
			</div>
		  </div>
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Register an Account</h1><br>
					<div id="register_error"></div>
				  <form  action="register.php" method="POST">
					<input type="text" name="username" placeholder="Username" value="" maxlength="10>
					<input type="password" name="password" placeholder="Password" value="" maxlength="10>
					<input type="text" name="email" placeholder="Email" value="">
					<input type="submit" class="login loginmodal-submit">
				  </form>
				</div>
			</div>
		  </div>	  
		  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">webShop</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="my account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li><a href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
		if (!isset($_SESSION["username"])) {
		echo '
		<li><a href="#" data-toggle="modal" data-target="#register-modal"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
		}else{
			echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
		}
		?>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" align="center">
    <div id ="home" class="panel panel-default">
      <div class="panel-heading" align="center">Home</div>
      <div class="panel-body">
		
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slides" src="slide1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="slides" src="slide2.png" alt="">
                            </div>
                            <div class="item">
                                <img class="slides" src="slide3.png" alt="">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
	  </div>
    </div>
  </div>
  </div>
  </div>
  

<div id="footer">
    <div class="footerText">
        Made by -Mike
    </div>
    <div id="render" align="center"></div>
</div>
</body>
</html>