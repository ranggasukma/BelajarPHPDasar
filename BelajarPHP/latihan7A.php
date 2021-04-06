<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="form.php">Kembali <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
    <?php
	$buku = $_POST['jumlah_buku'];
	$harga = 12500;
	$diskon = 5/100;



	if($buku > 20){
		$totaldiskon = $total_harga * $diskon;
		$hasil = $total_harga - $totaldiskon;
		echo "Buku yang dibeli sebanyak ".$buku;
		echo "<br>";
		echo "Harga Buku satuan RP  ".$harga;
		echo "<br>";
		echo "Total Harga Keseluruhan buku adalah ".$total_harga;
		echo "<br>";
		echo "Diskon yang didapatkan adalah " .$totaldiskon;
		echo "<br>";
		echo "Total uang harus dibayar oleh irwan adalah RP ".$hasil;
		echo "<br>";
	} else {
		$total_harga = $buku * $harga;
		$hasil = $total_harga;
		echo "Buku yang dibeli sebanyak ".$buku;
		echo "<br>";
		echo "Total Harga Keseluruhan buku adalah RP ".$total_harga;
		echo "<br>";
		echo "Diskon yang didapatkan adalah RP 0 " ;
		echo "<br>";
		echo "Total uang harus dibayar oleh irwan adalah RP ".$hasil;
		echo "<br>";
		echo "tidak dapat diskon";
	}
   ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>
