<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
    // codingan pertama bintang angka tanda x pada bil 3
    /*for ($a=1; $a<=5; $a++) 
    {
        for ($b=1; $b<=$a; $b++) 
        {
            if($a==3){
                if($b != 2){
                    echo $a;
                }else{
                    echo "x";
                }
            }else {
                echo $a;
            }
        }echo "<br>";
    }*/
    // codingan kedua bintang angka tanda x pada bil 3
    for ($a=1; $a<=5; $a++) {
        for ($b=1; $b<=$a; $b++) {
            if($a==3 && $b==2){
                echo "x";
            }else{
                echo $a;
            }
        }echo "<br>";
    }

    // codingan ketiga bintang 
    for ($c=1; $c<=5; $c++) {
        for ($d=1; $d<=$c; $d++) {
            echo "*";
        }
        echo "<br>";
    }
	?>

</body>
</html>