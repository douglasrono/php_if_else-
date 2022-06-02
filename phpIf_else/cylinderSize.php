<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cylinder comparison</title>
</head>
<body>
<div class="col-3 bg-warning">
     <?php
       if(isset($_GET['compare'])){
    $r = $_GET['r1'];
    $height= $_GET['h1'];

    $volume = pi() *$r* $r*$height;

    //  echo "The volume of cylinder 1 is: $volume " . "cubic metres";

    //  echo "<br>";

     $r2 = $_GET['r2'];
     $height2= $_GET['h2'];

     $volume2 = pi() *$r2* $r2*$height2;

    //  echo "The volume of cylinder 2 is: $volume2 " . "cubic metres";

    //  echo "<br>";

     if($volume2>$volume){
         echo " cylinder 2 is the biggest";
     }
     elseif($volume==$volume2){
       echo 'The two cylinders have same volumes';
     }
     else{
         echo "cylinder 1 is the biggest";
     }


}
     ?>

 </div>
  
    <div class="container d-flex justify-content-center align-items-center">
      <form action="cylinderSize.php" method="GET">
        <div class="">
            <h1> Cylinder 1</h1>
        <div class="mb-3">
          <input type="text" class="form-control" name="r1" placeholder="Radius of cylinder1">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="h1"  placeholder="Height of cylinder1">
        </div> <br> <br>
        </div>

        <div class="">
        <h1> Cylinder 2</h1>
        <div class="mb-3">
          <input type="text" name="r2"  class="form-control" placeholder="Radius of cylinder2">
        </div>
        <div class="mb-3">
          <input type="text" name="h2" class="form-control" placeholder="Height of cylinder2">
        </div>
        </div>
     <button type="submit" name="compare" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
