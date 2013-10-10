<!DOCTYPE HTML>
<head>
	<title>Login Sederhana</title>
</head>
<script>
	function coba(){
		var username=document.getElementById("username");
		var password=document.getElementById("password");

		if(username.value==''||password.value==''){
			alert('inputan tidak boleh kosong..');
		}
	}
</script>
	
<style>
	body{
		background: red;
	}
	form{ background: #66b1d8; width: 500px; height: 200px;padding-top: 50px;padding-bottom: 50px;}

</style>

<body>
<center>
<form name="formlogin" action="<?php $_SERVER['PHP_SELF']; ?>" method="get" onSubmit="coba()">
	 <h1>Login</h1>
	 Username <br><input type="text" name="username" id="username"><br>
	 Password <br><input type="text" name="password" id="password"><br>
	 <input type="submit" name="login" value="login">
</form>


<?php
	if(isset($_GET['username'])){
		$isiusername	=$_GET['username'];
		$isipassword	=$_GET['password'];
		$uname="faiz";
		$pass="faiz";

		
		$string = 'abcdefghijklmnopqrstuvwxyz';
		if(!preg_match("/^[a-zA-Z]+$/", $isiusername)){
			echo "<br>Username & Password tidak boleh ada angka";
		}

		if($isiusername==$uname && $isipassword==$pass){
			echo "<br>Selamat datang, ".$uname;
		}else{
			echo "<br>Username atau Password salah..";
		}
	}
?>
</center>
</body>
</html>


