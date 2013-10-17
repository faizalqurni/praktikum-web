<?php
	setcookie('nama_cookie','nilai_cookie');
?>
<!DOCTYPE HTML>
<head>
	<title>Set Cookie</title>
</head>
<body>
	<?php
		
		echo $_COOKIE['nama_cookie'];
	?>
	<p>Tekan Refresh (F5)</p>
</body>
</html>