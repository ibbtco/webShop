<?php
session_start();
require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){
$username =  mysqli_real_escape_string($connection,$_POST['username']);
$password =  mysqli_real_escape_string($connection,$_POST['password']);
$query = "SELECT * FROM user WHERE username = '" . $username ."' and password='".$password."' " ;
$result = $connection->query($query) or die($connection->error);
$count = $result->num_rows;

if ($count >= 1){
$_SESSION['username'] = $username;
$r = $connection->query("SELECT email FROM user WHERE username = '" . $_SESSION["username"] ."'"); 
$row = $r->fetch_row();
$_SESSION['email']= $row[0];

?>
<script>location.href = "http://gobets.pw/infoeducatia/webShop/v1.1/";</script>
<?php
}else{ 
echo 'Invalid login, please try again';
?>
<script>alert('Incorrect login!');
location.href = "http://gobets.pw/infoeducatia/webShop/v1.1/";</script>
<?php
}
}
?>