<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style  type="text/css">
        .qq{
            background-color:;
            margin:auto;
        }
        .wrapper {
            width: 1200px;
            margin: auto;

        }
        .header {
            height: 500px;
            border: 1px solid dashed;
            background-color: darkseagreen;
        }
        .header img{
            float:left;
        }
        </style>
</head>
<body>
	 <div class="qq">
    <div class="wrapper">
        <div class="header">
            <img style="height:120px;width:120px" src="data:image/png;base64,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"" />
           <p style="font-size:60px;font-family:'Comic Sans MS';text-align:center;"><b>Cửa hàng gấu bông OMG</b></p>
            <div  class="img header">
            	<form method="post" style="text-align: center;">
			<table >
				<tr >
					<td style="font-size:30px;font-family: 'Comic Sans MS';"><b>Tài Khoản<b>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td style="font-size:30px;font-family: 'Comic Sans MS';"> <b>Mật Khẩu<b>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
				<td></td>
				<td ><input type="submit" name="login" value="Login"></td>
			</tr>
			</table>
		</form>
                <img style=" height: 400px; width: 1200px;"   src="https://truongquochoc.com/wp-content/uploads/2020/10/30-hinh-anh-gau-bong-cuc-cute-9.jpg" />
            </div>
        </div>
	
<?php 

//Kết nối theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','db');
if($connect){
echo "Kết nối thành công";
}
else{
echo"Kết nối thất bại";
}

if(isset($_POST['login'])){
	 $username= $_POST['username'];
	 $password =$_POST['password'];
	 // Truy vấn từ bảng user cột username = giá trị username nhập từ form và cột password = giá trị password nhập từ form
	 $sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";

	 // Thực thi truy vấn
	 $result = mysqli_query($connect, $sql);
	 // Trả về kết quả , chính là các dòng được truy vấn
	 $row = mysqli_num_rows($result);
     $row_user = mysqli_fetch_array($result);
	 // Nếu $row > 0 --> có trên 1 dòng trong CSDL trùng với dữ liệu nhập vào form -> đăng nhập thành công 
	 if($row>0){	
	 	//Lưu tên đăng nhập lại vào biến toàn cục $_SESSION
	 	$_SESSION['username'] = $username;
	 	$_SESSION['user_id'] = $row_user['user_id'];
      echo "<script> alert('Đăng nhập thành công')</script>";
      echo $_SESSION['username'];
      echo "<script>window.open('index1.php','_self')</script>";
	 }
	 else{
	 	echo"<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
	 }
	}
?>
</body>
</html>
