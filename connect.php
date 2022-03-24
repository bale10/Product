<?php

$SKU = filter_input(INPUT_POST, 'sku');
$NAME = filter_input(INPUT_POST, 'name');
$PRICE = filter_input(INPUT_POST, 'price');
$DVD = filter_input(INPUT_POST, 'size');
$BOOK = filter_input(INPUT_POST, 'wei');
$HEIGHT  = filter_input(INPUT_POST, 'Height');
$WIDTH  = filter_input(INPUT_POST, 'Width');
$LENGHT = filter_input(INPUT_POST, 'Length');

$host = "localhost";
$database_userName = "id18561625_root";
$database_pass = "_B<kjD#|Xd_eiPm7";	
$database_name = "id18561625_product";

$conn = new mysqli ($host, $database_userName, $database_pass, $database_name);

if(mysqli_connect_error()){
	
	die('Error conection (' .mysqli_connect_error() .')' 
	.mysqli_connect_error());
	
}

else {
	
	$sql="INSERT INTO product_items (sku, name, price, wei, size, hei, lenn, wid) 
	values ('$SKU','$NAME', '$PRICE', '$BOOK', '$DVD', '$HEIGHT', '$LENGHT', '$WIDTH')";
	if($conn->query($sql)){

		 //echo "Record succesful"; 
		// echo "<a href='/view/add.html'>Come back for new order</a>";

		header("Location:../index.php");
	}
	else{
		echo "Error record" .$sql ."<br>". $conn->error;
	}
	$conn->close();
}

?>