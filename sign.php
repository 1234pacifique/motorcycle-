<style type="text/css">
	input{
		width: 300px;
		height: 30px;
		font-size: 15px;
		text-align: center;


	}
.mamy{
	box-shadow: 9px 9px 9px blue;
	width: 300px;
	height: 200px;
	margin-left: 10cm;
	margin-top: 2cm;

}
.moi{
	color: black;
	text-transform: capitalize;
	background-color: skyblue;
}
*{
	background: bisque;
}

</style>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<div class="mamy"> 
		<input type="text" name="username" placeholder="enter your username"><br><br>
		<input type="password" name="password" placeholder="enter your password"><br><br>
		<input class="moi" type="submit" name="sign" value="sign">
		</div>
	</form>

</body>
</html>
<?php
include('conn.php');
if (isset($_POST['sign'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO `users`(`user_id`, `username`, `password`) VALUES ('','$username','$password')";
$re=mysqli_query($conn,$sql);
if ($re==true) {
	header('location:login.php');
} else {
	echo "sign out";
}
}

?>