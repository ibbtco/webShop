<?php
session_start();
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
#products {
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
.details {
right:1%;
top:15%;
position:absolute;
}
.row{
	margin-left:1%;
	margin-right:1%;
	margin-top:1%;
	position:relative;
}
.img{
	position: absolute;
	left: 1% !important;
}
.price{
	left:91%;
	top:60%;
	position:absolute;
}
.thumbnail img {
    width: 100%;
}
.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}	
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-s6z2{text-align:center}	
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

	<div class="modal fade" id="popup-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
         <div class="thumbnail">
            <img class="img-responsive" src="product1.png" width="800" height="300" alt="">
            <div class="caption-full">
               <h4 class="pull-right"><a href="http://gobets.pw/infoeducatia/webShop/v1.1/purchase.php?key=p1"><button type="button" class="btn btn-success">Buy at $29,00</button></a></h4>
               <h4>CS:GO Guardian T-Shirt - Navy Blue</h4>
               <p>Soft to touch light weight CS:GO t-shirt, featuring a woven label accent on the on the left sleeve.<br> 
                  <b>Materials:</b> 60% Cotton / 40% Polyester
               </p>
               <h3 align="center">
               <b>Sizing Chart</b></h>
               <table class="tg" align="center">
                  <tr>
                     <th class="tg-031e"></th>
                     <th class="tg-s6z2">S</th>
                     <th class="tg-s6z2">M</th>
                     <th class="tg-s6z2">L</th>
                     <th class="tg-s6z2">XL</th>
                     <th class="tg-s6z2">XXL</th>
                     <th class="tg-s6z2">XXL</th>
                  </tr>
                  <tr>
                     <td class="tg-s6z2">Chest</td>
                     <td class="tg-s6z2">89-95cm</td>
                     <td class="tg-s6z2">96-102cm</td>
                     <td class="tg-s6z2">104-112cm</td>
                     <td class="tg-s6z2">113-122cm</td>
                     <td class="tg-s6z2">127-132cm</td>
                     <td class="tg-s6z2">134-137cm</td>
                  </tr>
                  <tr>
                     <td class="tg-s6z2">Waist</td>
                     <td class="tg-s6z2">71-76cm</td>
                     <td class="tg-s6z2">81-86cm</td>
                     <td class="tg-s6z2">91-99cm</td>
                     <td class="tg-s6z2">101-106cm</td>
                     <td class="tg-s6z2">111-116cm</td>
                     <td class="tg-s6z2">127cm</td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>

  <div class="modal fade" id="popup-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
         <div class="thumbnail">
            <img class="img-responsive" src="product2.png" width="800" height="300" alt="">
            <div class="caption-full">
               <h4 class="pull-right"><a href="http://gobets.pw/infoeducatia/webShop/v1.1/purchase.php?key=p2"><button type="button" class="btn btn-success">Buy at $10</button></a></h4>
               <h4>CS:GO Mug</h4>
               <p>12 oz. CS:GO Mug<br> 
                  <b>Materials:</b> ceramics
               </p>
            </div>
         </div>
      </div>
   </div>

  <div class="modal fade" id="popup-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
         <div class="thumbnail">
            <img class="img-responsive" src="product3.png" width="800" height="300" alt="">
            <div class="caption-full">
               <h4 class="pull-right"><a href="http://gobets.pw/infoeducatia/webShop/v1.1/purchase.php?key=p3"><button type="button" class="btn btn-success">Buy at $87</button></a></h4>
               <h4>CS:GO Softshell Jacket</h4>
               <p>Functional soft-shell jacket with comfortable fleece lining.<br> 
                  <b>Materials:</b> <br>Front: 94% Polyester 6% Spandex<br>
									Back: 100% Polyester
               </p>
               <h3 align="center">
               <b>Sizing Chart</b></h>
               <table class="tg" align="center">
                  <tr>
                     <th class="tg-031e"></th>
                     <th class="tg-s6z2">S</th>
                     <th class="tg-s6z2">M</th>
                     <th class="tg-s6z2">L</th>
                     <th class="tg-s6z2">XL</th>
                     <th class="tg-s6z2">XXL</th>
                     <th class="tg-s6z2">XXL</th>
                  </tr>
                  <tr>
                     <td class="tg-s6z2">Chest</td>
                     <td class="tg-s6z2">89-95cm</td>
                     <td class="tg-s6z2">96-102cm</td>
                     <td class="tg-s6z2">104-112cm</td>
                     <td class="tg-s6z2">113-122cm</td>
                     <td class="tg-s6z2">127-132cm</td>
                     <td class="tg-s6z2">134-137cm</td>
                  </tr>
                  <tr>
                     <td class="tg-s6z2">Waist</td>
                     <td class="tg-s6z2">71-76cm</td>
                     <td class="tg-s6z2">81-86cm</td>
                     <td class="tg-s6z2">91-99cm</td>
                     <td class="tg-s6z2">101-106cm</td>
                     <td class="tg-s6z2">111-116cm</td>
                     <td class="tg-s6z2">127cm</td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>

  <div class="modal fade" id="popup-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
         <div class="thumbnail">
            <img class="img-responsive" src="product4.png" width="800" height="300" alt="">
            <div class="caption-full">
               <h4 class="pull-right"><a href="http://gobets.pw/infoeducatia/webShop/v1.1/purchase.php?key=p4"><button type="button" class="btn btn-success">Buy at $20</button></a></h4>
               <h4>CS:GO Globe Mousepad</h4>
               <p><b>Size:</b> 14"x19" - 3mm Thickness<br> 
                  <b>Materials:</b> high quality cloth material with a specially designed non-slip rubber base.
               </p>
            </div>
         </div>
      </div>
   </div>

  <div class="modal fade" id="popup-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
         <div class="thumbnail">
            <img class="img-responsive" src="product5.png" width="800" height="300" alt="">
            <div class="caption-full">
               <h4 class="pull-right"><a href="http://gobets.pw/infoeducatia/webShop/v1.1/purchase.php?key=p5"><button type="button" class="btn btn-success">Buy at $99</button></a></h4>
               <h4>CS:GO Reversible Vest</h4>
               <p>Reversible two colored vest with durable rip-stop fabric.<br> 
                  <b>Materials:</b> 100% Polyester
               </p>
               <h3 align="center">
               <b>Sizing Chart</b></h>
               <table class="tg" align="center">
                  <tr>
                     <th class="tg-031e"></th>
                     <th class="tg-s6z2">S</th>
                     <th class="tg-s6z2">M</th>
                     <th class="tg-s6z2">L</th>
                     <th class="tg-s6z2">XL</th>
                     <th class="tg-s6z2">XXL</th>
                     <th class="tg-s6z2">XXL</th>
                  </tr>
                  <tr>
                     <td class="tg-s6z2">Chest</td>
                     <td class="tg-s6z2">89-95cm</td>
                     <td class="tg-s6z2">96-102cm</td>
                     <td class="tg-s6z2">104-112cm</td>
                     <td class="tg-s6z2">113-122cm</td>
                     <td class="tg-s6z2">127-132cm</td>
                     <td class="tg-s6z2">134-137cm</td>
                  </tr>
                  <tr>
                     <td class="tg-s6z2">Waist</td>
                     <td class="tg-s6z2">71-76cm</td>
                     <td class="tg-s6z2">81-86cm</td>
                     <td class="tg-s6z2">91-99cm</td>
                     <td class="tg-s6z2">101-106cm</td>
                     <td class="tg-s6z2">111-116cm</td>
                     <td class="tg-s6z2">127cm</td>
                  </tr>
               </table>
            </div>
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
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="my account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
        <li class="active"><a href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li> 
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
    <div id ="products" class="panel panel-default">
      <div class="panel-heading" align="center">Products</div>
      <div class="panel-body">
		
		<div class="row">
	<ul class="list-group" align="left">
   <li class="list-group-item">
    <img src="product1.png" width="64" height="64">
	<div class="details"><a href="#" data-toggle="modal" data-target="#popup-1"><button type="button" class="btn btn-default">Product Details</button></a></div>
	<div class="price">Price: $27</div>
    <div class="pname">CS:GO Guardian T-Shirt - Navy Blue</div>
	</li>
   <li class="list-group-item">
    <img src="product2.png" width="64" height="64">
	<div class="details"><a href="#" data-toggle="modal" data-target="#popup-2"><button type="button" class="btn btn-default">Product Details</button></a></div>
	<div class="price">Price: $10</div>
    <div class="pname">CS:GO Mug</div>
	</li>
	<li class="list-group-item">
    <img src="product3.png" width="64" height="64">
	<div class="details"><a href="#" data-toggle="modal" data-target="#popup-3"><button type="button" class="btn btn-default">Product Details</button></a></div>
	<div class="price">Price: $87</div>
    <div class="pname">CS:GO Softshell Jacket</div>
	</li>
	<li class="list-group-item">
    <img src="product4.png" width="64" height="64">
	<div class="details"><a href="#" data-toggle="modal" data-target="#popup-4"><button type="button" class="btn btn-default">Product Details</button></a></div>
	<div class="price">Price: $20</div>
    <div class="pname">CS:GO Globe Mousepad</div>
	</li>
	<li class="list-group-item">
    <img src="product5.png" width="64" height="64">
	<div class="details"><a href="#" data-toggle="modal" data-target="#popup-5"><button type="button" class="btn btn-default">Product Details</button></a></div>
	<div class="price">Price: $99</div>
    <div class="pname">CS:GO Reversible Vest</div>
	</li>
</ul>
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