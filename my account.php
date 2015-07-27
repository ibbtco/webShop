<?php
session_start();
if (!isset($_SESSION['username'])){
	header('Location: http://gobets.pw/infoeducatia/webShop/v1.1/');
} else {
	require('connect.php');
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
    -webkit-user-select: none;
    -moz-user-select: none;
	max-height: 750px;
}
.panel-heading {
    background: linear-gradient(#434343, #2B2B2B) !important;
    color: #A4A4A4 !important;
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
        <li class="active"><a href="my account.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
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
    <div id ="products" class="panel panel-default">
      <div class="panel-heading" align="center">Your account</div>
      <div class="panel-body">
		<div style="top:1px; left:5px;" align="left">Email: <?php echo $_SESSION['email']; echo '   <a href="emailchange.php"><span class="label label-primary" style="float:right;">Change email</span></a>'; ?></div>
		<div style="top:5px; left:5px;" align="left">Password: <?php 
		$pwq = $connection->query("SELECT password FROM user WHERE username = '" . $_SESSION["username"] ."'");
		$pw = $pwq->fetch_row();
		$length = strlen($pw[0]);
		echo str_repeat("*", $length);
		echo '<a href="pwchange.php"><span class="label label-primary" style="float:right;">Change password</span></a>';
		?></div>
	  </div>
    </div>
  </div>
  
  <div class="container-fluid" align="center">
    <div id ="products" class="panel panel-default">
      <div class="panel-heading" align="center">Your orders</div>
      <div class="panel-body">

<?php 
// facem rost de email
$q1 = $connection->query("SELECT email FROM user WHERE username = '" . $_SESSION["username"] ."'");
$row1 = $q1->fetch_row();
$email = $row1[0];
//
$result = $connection->query("SELECT * FROM orders WHERE email = '" . $email ."'");
echo '
<table class="table">
  <thead>
    <tr>
      <th>Order #</th>
      <th>Product</th>
      <th>Price in BTC</th>
      <th>Date</th>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>'; 

while($row = $result->fetch_array(MYSQLI_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['orderid'] . "</td>"; 
print "<td>" . $row['product'] . "</td>"; 
print "<td>" . $row['price'] . " BTC" . "</td>"; 
print "<td>" . $row['date'] . "</td>";

print "</tr>"; 
} 
print "</tbody>";
print "</table>"; 
?>
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