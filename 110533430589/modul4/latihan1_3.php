<?php
	setcookie('nama_cookie','nilai_cookie');	
?>
<!DOCTYPE HTML>
<head>
	<title>Hapus Cookie</title>
</head>
<body>
	<?php
		if (isset($_COOKIE['nama_cookie'])){
			echo 'cookie di-set<br>';
			setcookie('nama_cookie','',time()-3*3600);
			echo 'cookie dihapus';
		}else{
			echo 'unset';
		}
	?>
	<p>Tekan Refresh (F5)</p>
</body>
</html>