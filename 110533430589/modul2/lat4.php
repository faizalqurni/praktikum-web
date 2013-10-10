<!DOCTYPE HTML>
<head>
	<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	Pekerjaan
	<select name="job">
		<option value="mahasiswa">Mahasiswa</option>
		<option value="abri">ABRI</option>
		<option value="pns">PNS</option>
		<option value="swasta">Swasta</option>
	</select>

	<input type="submit" value="ok">

</form>

<?php
	if(isset($_POST['job'])){
		echo $_POST['job'];
	}
?>


</body>
</html>


