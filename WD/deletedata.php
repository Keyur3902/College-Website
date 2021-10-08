<?php
if(isset($_POST['Email'])){

$server='localhost';
$username = 'root';
$password = '';
$db = 'WD';


$mysqli = new mysqli($server, $username,$password, $db);


  if ($mysqli->connect_error) {
    die('Connect Error (' .    $mysqli->connect_errno . ') '.    $mysqli->connect_error);
  }

$Email = $_POST['Email'];

$sql = "DELETE from users WHERE Email = '$Email'";
$result = $mysqli->query($sql);
header("location: index.php");
$mysqli->close();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="../WD/assets/style.css" rel="stylesheet">
    
    <title>College Site</title>
  </head>
  <body>
    <form class="row g-3 form-control" action = "deletedata.php" method = "POST">
        <div class="row g-3 signupform">
            <div class="col-md-6">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name = "Email">
            </div>
        </div>
        <div class="col-12">
              <button type="submit" class="btn btn-primary">Delete</button>
            </div>
           
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>


