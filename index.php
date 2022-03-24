<html>
<head>
<title>Product List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container header">
<a href="view/add.html">
<input type="button" id="add" value="ADD"></a>

<form method="post" action="php/delete.php">

<input type="submit" id="delite" value="DELITE" name="delite" >

<h1><span>Product List</span></h1>

<hr>

<div class = "Product">

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

$sql= "SELECT Id, sku, name, price, wei, size, hei,lenn,wid  FROM product_items WHERE wei OR size OR wid != 0";
$result=$conn-> query($sql);

if($result-> num_rows > 0){
	while ($row = $result-> fetch_array()){
		echo
		'<div class="product-item">
			<input type=checkbox name=chk[] value="'. $row["Id"] .'"/>
			<br>
			<br>
			<p>'. $row["sku"] .'</p>
			<p>'. $row["name"] .'</p>
			<p>'. $row["price"] .'</p>
			<p> '. (($row["wid"] != 0) ? 'Dimension:'. $row["hei"] ."x". $row["lenn"]."x". $row["wid"] .'' : "").'</p> 
			<p> '. (($row["size"] != 0) ? 'Size :'. $row["size"] .'' : "").'</p>
			<p> '. (($row["wei"] != 0) ? 'Weight:'. $row["wei"] .'' : "").'</p>
		
		</div>';
	}
	
}
else {
	echo"0 rsult"; 
}
$conn-> close();	

?>

</form>

</div>
</div>
</body>
</html>
