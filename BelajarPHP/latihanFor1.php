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
	for ($a=1990;$a<=2021;$a++) {	?>
	<option value="<?=$a;?>" <?php if
    ($a==1983){echo "selected";}?> ><?=$a;
    ?></option>
<?php }?>

?> 

</select>
</body>
</html>

