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
   
 <!--Form Latihan 7B  -->
<div class="utama"><h2>Hasil Evaluasi</h2> 
        <form action="latihan7B.php" method="POST">
        <div class="form-group">
            <label for="UTS">Nilai UTS</label>
                <input type="number" class="form-control" name="UTS" placeholder = "Masukkan Nilai UTS" min="0" max="100"required>
        </div>
        <div class="form-group">
            <label for="UAS">Nilai UAS</label>
                <input type="number" class="form-control"  name="UAS" placeholder = "Masukkan Nilai UAS"  min="0" max="100" required>
        </div>
        <div class="form-group">
            <label for="TGS">Nilai TUGAS</label>
                <input type="number" class="form-control" name="TGS" placeholder ="Masukkan Nilai TUGAS"  min="0" max="100" required>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        
    </div>
   
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>

   
  