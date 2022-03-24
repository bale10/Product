<?php

$host = "localhost";
$database_userName = "id18561625_root";
$database_pass = "_B<kjD#|Xd_eiPm7";	
$database_name = "id18561625_product";

$conn = new mysqli ($host, $database_userName, $database_pass, $database_name);

if(mysqli_connect_error()){
	
	die('Error conection (' .mysqli_connect_error() .')' 
	.mysqli_connect_error());
	
}

if (isset($_REQUEST["delite"])){

	$chk = $_REQUEST["chk"];
	$a=implode("," , $chk);
	//echo $a;
mysqli_query($conn, "DELETE FROM product_items WHERE Id IN ($a)");
header("Location:../index.php");
}
mysqli_close($conn);
?>