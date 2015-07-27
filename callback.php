<?php
session_start();
require 'connect.php';
include "/home/goberdns/public_html/admin/mail.php";

$id ="e1092ff7-fc7f-4aa6-a6be-0b6a549e46f8";
$pw = "iKilledchu12.";

$secret = "f8fe526080ec3366eddbb498c6df4e1a";  //md5 hash a unui cuvant
$address = "1MBF4cGmVac3r561YYRcamqJKN269yk7aD"; 

if ($_GET['test'] == "true") {
     echo 'Ignoring Test Callback';
     return;
   } 
 
if($_GET['secret'] != $secret){
echo "Invalid";
return;
}
 
if($_GET['mainaddress'] != $address){
echo "Invalid";
return;
}
if (!isset($_GET['btc'])){
echo "Invalid";
return;
}
if (!isset($_GET['value'])){
echo "Invalid";
return;
}
if (!isset($_GET['email'];)){
	echo "Invalid";
	return;
}
if (!isset($_GET['product'])){
	echo "Invalid";
	return;
}
$price = $_GET['btc'];
$value= $_GET['value'] / 10000000;

if ($value >= $price){
	$invoice= $_GET['invoice'];
	$email= $_GET['email'];
	$now = new DateTime();
	$date = $now->format('d-m-Y');
	$product= $_GET['product'];
	if ($product== "pr1"){
		$product="CS:GO Guardian T-Shirt";
	}
	if ($product== "pr2"){
		$product="CS:GO Mug";
	}
	if ($product== "pr3"){
		$product="CS:GO Softshell Jacket";
	}
	if ($product== "pr4"){
		$product="CS:GO Globe Mousepad";
	}
	if ($product== "pr5"){
		$product="CS:GO Reversible Vest";
	}
		$query = "INSERT INTO orders (orderid, email, price,date,product) VALUES ('$invoice', '$email', '$value','$date','$product')";
        if ($connection->query($query) === TRUE) {
	$sendto = $email;  
	$subj = "Your order at webShop";
	$title ="Order #" . $_GET['invoice'];
	$body = "Your order #". $_GET['invoice'] . "<br>" . "Amount paid: " . $value . " BTC" . "<br>" . "Product name:";
	sendmail($title,$body,$sendto,$subj);
        } else{
		  echo 'Something went wrong while updating the DB!';
		  echo $connection->error;
		}


}else{
echo "There was an error, the amount paid is probably less than the price of the product!</br>";
echo "Amount to be paid: " . $price . "</br>" . "Amount paid: " . $value;
}


 
 
?>