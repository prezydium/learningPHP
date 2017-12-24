<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Podsumowanie</title>
</head>
<body>


<?php
	$baraniny=$_POST['baranina'];
	$wolowiny=$_POST['wolowina'];
	$suma=8.50*$baraniny+7.75*$wolowiny;
	
echo<<<END
	<h2>Podsumowanie zamówienia kebabowego</h2>
	<table border="1" cellpadding="1" cellspacing'"0">
	<tr>
		<td>Baranina 8.50 PLN/Sztuka</td><td>$baraniny</td>
	</tr>
	<tr>
		<td>Wołowina 7.75 PLN/Sztuka</td><td>$wolowiny</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
	</table>
	
END;

?>
</body>

</html>