<?php
session_start();
require('connect.php');
?>
<html>
<head>
<title>webShop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="jquery.fittext.js"></script>
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
		
		$(".price").fitText(0.4, { minFontSize: '13px', maxFontSize: '20px' });
		$(".pname").fitText(2, { minFontSize: '10px', maxFontSize: '20px' });
		if (screen.width <= 640){
			$("#products").css("width", "100%");
			$(".price").css("left","80%");
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
    margin-top: 25px;
}
.footerText {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    text-align: center;
    color: #3D3D3D;
}
#main {
    width: 82%;
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
.changepw{
	border-radius: 5px;
    background-color: #FF;
    color: #555;
    padding: 15px 20px;
    border: 1px solid #000000;
	margin-top: 1%;
	max-width:450px;
}
</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">webShop</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="my account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li><a href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
		if (!isset($_SESSION["username"])) {
			
		}else{
			echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
		}
		?>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" align="center">
    <div id ="main" class="panel panel-default">
      <div class="panel-heading" align="center">Change Password</div>
      <div class="panel-body">
	  <?php
	if (isset($_POST['currentpw']) && isset($_POST['pw1']) && isset($_POST['pw2']) && isset($_SESSION['username'])){
        $currentpw = mysqli_real_escape_string($connection,$_POST['currentpw']);
		$newpw1 = mysqli_real_escape_string($connection,$_POST['pw1']);
        $newpw2 = mysqli_real_escape_string($connection,$_POST['pw2']);

		if ($newpw1 <> $newpw2){
			echo "Passwords do not match";
		} else {
			$r = $connection->query("SELECT password FROM user WHERE username = '" . $_SESSION["username"] ."'");
			$row = $r->fetch_row();
			if ($row[0] <> $currentpw){
				echo "Given password does not match with the current password!";
			} else {
				if ($connection->query("UPDATE ebsmembers SET password='$newpw1' WHERE username='$_SESSION["username"]'")){
					echo "Password succesfuly changed!";
				}
			}
		}
} 
?>
	  <div class="changepw">
	  <h3>Change Password:</h3><hr>
	<form method="POST" action="">
	<fieldset>
	<div class="form-group">
    <label for="currentpw">Current Password:</label>
    <input type="password" class="form-control" name="currentpw" value="">
    </div>
    <div class="form-group">
      <label for="pw1">New password:</label>
      <input type="password" class="form-control" name="pw1" value="">
    </div>
	<div class="form-group">
      <label for="pw2">Retype new password:</label>
      <input type="password" class="form-control" name="pw2" value="">
    </div>
	<input type="submit" class="btn btn-default" class="btn btn-default">
	</fieldset>
  </form>

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