<?php
session_start();
if (!isset($_SESSION['username'])){
	header('Location: http://gobets.pw/infoeducatia/webShop/v1.1/');
}
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
#products {
    width: 75%;
    font: Bariol;
    font-size: 18px;
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

</style>
</head>

<body>
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
					<div id="login_error"></div>
				  <form  action="login.php" method="post">
					<input type="text" name="user" placeholder="Username" value="">
					<input type="password" name="pass" placeholder="Password" value="">
					<input type="submit" class="login loginmodal-submit">
				  </form>
				</div>
			</div>
		  </div>
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Register an Account</h1><br>
					<div id="register_error"></div>
				  <form  action="register.php" method="post">
					<input type="text" name="user" placeholder="Username" value="">
					<input type="password" name="pass" placeholder="Password" value="">
					<input type="text" name="email" placeholder="Email" value="">
					<input type="submit" class="login loginmodal-submit">
				  </form>
				</div>
			</div>
		  </div>	  
		  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">webShop</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="active"><a href="my account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li><a href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
		if (!isset($_SESSION["username"])) {
		echo '
		<li><a href="#" data-toggle="modal" data-target="#register-modal"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
		}else{
			echo '<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
		}
		?>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" align="center">
    <div id ="products" class="panel panel-default">
      <div class="panel-heading" align="center">Purchase</div>
      <div class="panel-body">
		<?php
		$secret = "f8fe526080ec3366eddbb498c6df4e1a";   //md5 hash a unui cuvant
		$address = "1MBF4cGmVac3r561YYRcamqJKN269yk7aD";  

		if(isset($_GET['key'])) {


		if ($_GET['key'] == "p1"){
		$price_in_usd = 0.3;
		$product= "pr1";
		} elseif($_GET['key'] =="p2"){
		$price_in_usd = 0.5;
		$product= "pr2";
		} elseif($_GET['key'] =="p3"){
		$price_in_usd = 0.8;
		$product = "pr3";
		} elseif($_GET['key'] =="p4"){
		$price_in_usd = 1;
		$product = "pr4";
		}elseif($_GET['key'] == "p5"){
		$price_in_usd = 1.5;
		$product="pr5";
		}else{
		echo "Invalid param. Please contact an administrator or try again later";
		}

		if ($price_in_usd <> ""){

		$price_in_btc = file_get_contents("https://blockchain.info/tobtc?currency=USD&value=" . $price_in_usd);
		$invoice = "wS-" . rand();
		$callback = "http://gobets.pw/infoeducatia/webShop/v1.1/callback.php?invoice=".$invoice."&secret=".$secret."&mainaddress=".$address ."&btc=" . $price_in_btc . "&email=" . $_SESSION['email'] . "&product=" . $product;
		$result = json_decode(file_get_contents("https://blockchain.info/api/receive?method=create&address=".$address."&callback=" .urlencode($callback)), true);
		$qrcode = "https://blockchain.info/qr?data=bitcoin:". $result["input_address"]. "?amount=" . $price_in_btc;
		echo '<div align="center">';
		echo '</br>';
		echo '<img src="'.$qrcode.'"' . 'height="125" width="125"/>' . "</br>";
		echo "Invoice #: " . $invoice . "<br>";
		echo "Please send <b>" . $price_in_btc ."</b> BTC to <b>".  $result["input_address"] . "</b></br>";
		echo '</br></br>After sending the bitcoin go to <a href="http://gobets.pw/infoeducatia/webShop/v1.1/my account.php">My Account</a> page and wait for your order to appear, you will also receive an order confirmation email!';
		echo "</div>";
		}
		} else {
			echo "Something went wrong!";
		}
		?>
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