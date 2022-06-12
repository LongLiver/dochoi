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
            background-color:gray;
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
            <img style="height:120px;width:120px" src="https://upload.wikimedia.org/wikipedia/vi/thumb/0/0c/Liverpool_FC.svg/175px-Liverpool_FC.svg.png" />
           <p style="font-size:60px;font-family:'Comic Sans MS';text-align:center;"><b>Liverpool Sportswear</b></p>
            <div class="img header">
            	<form method="post" style="text-align: center;">
			<table >
				<tr >
					<td style="font-size:30px;font-family: 'Comic Sans MS';"><b>User name<b>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td style="font-size:30px;font-family: 'Comic Sans MS';"> <b>Password<b>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
				<td></td>
				<td ><input type="submit" name="login" value="Login"></td>
			</tr>
			</table>
		</form>
                <img style=" height: 400px; width: 1200px;"   src="https://backend.liverpoolfc.com/sites/default/files/styles/xl/public/acquiadam/2021-11/atletico-highlights-03112021.jpg?itok=k0a4QCff&width=1680" />
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
