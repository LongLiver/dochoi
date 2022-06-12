<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <div class="content">
 	<!-- Lấy id từ trang chủ -->
 	<?php 
 	$connect = mysqli_connect('localhost','root','','db');
 		$id = $_GET['id'];
 		$sql ="SELECT * FROM Product WHERE Product_ID = {$id}";
 		$result = mysqli_query($connect, $sql);
 		while($row = mysqli_fetch_array($result)){
 			?>

 			<div style="float:left">
 				<!-- hiển thị ảnh sản phẩm -->
 				<img src="images/<?php echo $row['Product_Image'] ?>" width="400px" height="400px">
		 	</div>
		    <div>
		    	<h2> Product Name: <?php echo $row['Product_Name'] ?></h2>
		    	<a href="add_cart.php?id=<?php echo $id; ?>">
		    	<button> Add to Cart</button>
		    </a>
		    </div>
    <?php
 		}
 	?>
 	
 </div>
</body>
</html>