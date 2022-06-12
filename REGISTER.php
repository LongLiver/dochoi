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
<form method="POST"style="text-align: center;">
    <table>
        <tr>
            <td style="font-size:30px;font-family: 'Comic Sans MS';"><b>User_ID:<b> </td>
            <td><input type="text" name="userid"></td>
        </tr>
        <tr>
            <td style="font-size:30px;font-family: 'Comic Sans MS';"><b>Username:<b> </td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td style="font-size:30px;font-family: 'Comic Sans MS';"> <b>Password:<b> </td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td> </td>
            <td><input type="submit" name="register" value="Register"></td>
        </tr>
    </table>
    <img style=" height: 400px; width: 1200px;"   src="https://backend.liverpoolfc.com/sites/default/files/styles/xl/public/acquiadam/2021-11/atletico-highlights-03112021.jpg?itok=k0a4QCff&width=1680" />
            </div>
        </div>
        </form>
    <?php 
    $connect =mysqli_connect('localhost','root','','db');
if($connect){
    echo "kết nối thành công";
}
else{
    echo "kết nối không thành công";
} 
   ////nêus click vào register thì mwois thực hiện
   if(isset($_POST['register'])){ 
    $user_id = $_POST['userid'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sql ="INSERT INTO user VALUES('$user_id','username','$password')";
    $result= mysqli_Query($connect,$sql);
    if($result){
       echo "<script> alert('Thêm mới thành công')</script>";
    }
    else{
        echo "thêm mới thất bại";
    }
   }
    ?>


</body>
</html>