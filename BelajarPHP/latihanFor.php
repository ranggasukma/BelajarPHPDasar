<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<select name="">
<?php 
	for ($a=1990;$a<=2021;$a++) {
	if ($a== 1998){
		echo "<option value=$a selected>1998</option>";}
	else{
		echo "<option value=$a>$a</option>";}
		
	}
 
	?>
</select>
</body>
</html>