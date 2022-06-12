<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="1 solid black">
	<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Product Image</th>
		<th colspan="3">Action</th>
	</tr>
	<?php 
		$connect = mysqli_connect('localhost','root','','db');
		$sql= "SELECT * FROM product";
		$result = mysqli_query($connect,$sql);		
		while($row = mysqli_fetch_array($result)){
			$id = $row['Product_ID'];

			?>
			<tr>
				<td> <?php echo $id ?></td>
				<td> <?php echo $row['Product_Name']; ?></td>
				<td> <img src='images/<?php echo $row['Product_Image'];?>' style="width: 100px;"></td>
				<td> <a href="Addproduct.php<?php echo $row['Product_ID']?>"> Update </a></td>
				<td> <a href="?idxoa=<?php echo$id?>"> Delete </a></td>
			</tr>

			<?php
		}
	?>

</table>

<!--xóa dữ liệu ở đây -->
<?php 
$id ='-1';
if(isset($_GET['idxoa'])){
	$id = intval($_GET["idxoa"]);
	echo $id;
$sql = "DELETE FROM product WHERE Product_ID={$id}";
$result=mysqli_query($connect,$sql);
if($result){
	echo "<script> alert('xóa thành công')</script>";
	 		echo"<script>window.open('manage_product.php','_self')</script>";
}
else{
	echo "<script> alert('lỗi')</script>";
}
}

?>
</body>
</html>