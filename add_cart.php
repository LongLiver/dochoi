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
<?php
$connect = mysqli_connect('localhost','root','','db');
$id = $_GET['id'];
// nen kiem tra neu san pham da co trong gio hang roi thi ko them vao nua
if(isset($_SESSION['username'])){
	
	$user_id = $_SESSION['user_id'];
	// thu tu các cot trong bang cart của em ko giong cua co n^^en cau sql ko dung
	// cua em quality xong moi den user_id
	$sql = "INSERT INTO cart VALUES ('', '$id','1','$user_id')";
	$result = mysqli_query($connect,$sql);
	if($result){
		echo"<script>alert('Thêm sp vào giỏ hàng thành công!') </script>";
	}
	else{
		echo"<script>alert('Thêm sp vào giỏ hàng lỗi!') </script>";
	}
}
else{
	echo"<script>alert('Bạn cần đăng nhập đẻ thêm sản phẩm vào giỏ hàng')</script)";
	}
?>
</body>
</html>

