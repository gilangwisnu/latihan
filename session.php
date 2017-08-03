<?php
	session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>
</head>
<body>
<h1>Latihan Session</h1>
<?php
	echo "Nama = ".$_SESSION["nama"]. "<br>";
	echo "ID = ".$_SESSION["id"]. "<br>";
	echo "Hak Akses = ".$_SESSION["hak_akses"];
?>

</body>
</html>