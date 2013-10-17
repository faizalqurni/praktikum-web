<?php session_start(); ?>
<!DOCTYPE HTML>
<head>
	<title>Hapus Session</title>
</head>
<body>
	<?php
		if(isset($_SESSION['test'])){
			unset($_SESSION['test']);
			echo 'session dihapus';
		}else{
			echo 'unset';
			print_r($_SESSION);
		}
	?>
	<p>Tekan Refresh (F5)</p>
</body>
</html>