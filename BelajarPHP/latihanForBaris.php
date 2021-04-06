<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 
    $baris = $_POST['baris'];
	for ($a=1;$a<=$baris;$a++) 
    {
        for ($b=1;$b<=$a;$b++) {
            echo "*";
        }
        echo "<br>";
	}
 
	?>

</body>
</html>