<?php
if(isset($_POST['Email'])){

$server='localhost';
$username = 'root';
$password = '';
$db = 'WD';


$mysqli = new mysqli($server, $username, $password, $db);


if ($mysqli->connect_error) {
	die('Connect Error (' .	$mysqli->connect_errno . ') '.	$mysqli->connect_error);
}

    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Pass = $_POST['Pass'];
    $Phone = $_POST['Phone'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $Addrs = $_POST['Addrs'];
    $City = $_POST['City'];
    $Zip = $_POST['Zip'];

$sql = "UPDATE users SET FirstName = '$FirstName', LastName = '$LastName', Pass = '$Pass', Phone = '$Phone', Gender = '$Gender', Age = '$Age', Addrs = '$Addrs', City = '$City', Zip = '$Zip' WHERE Email = '$Email'";
$result = $mysqli->query($sql);
header("location: update.php");

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
    <form class="row g-3 form-control" action = "updateform.php" method = "POST">
        <div class="row g-3 signupform">
            <div class="col-md-6">
                <label for="FirstName" class="form-label">FirstName</label>
                <input type="text" class="form-control" id="FirstName" name = "FirstName">
            </div>
            <div class="col-md-6">
                <label for="LastName" class="form-label">LastName</label>
                <input type="text" class="form-control" id="LastName" name = "LastName">
            </div>
        
            <div class="col-md-6">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" id="Email" name = "Email">
            </div>
            <div class="col-md-6">
              <label for="Pass" class="form-label">Password</label>
              <input type="password" class="form-control" id="Pass" name = "Pass">
            </div>
            <div class="col-md-6">
              <label for="Phone" class="form-label">Phone No.</label>
              <input type="number" class="form-control" id="Phone" name = "Phone">
            </div>
            <div class="col-md-2">
              <label for="Gender" class="form-label">Gender</label>
              <input type="text" class="form-control" id="Gender" name = "Gender">
            </div>
            <div class="col-md-2">
              <label for="Age" class="form-label">Age</label>
              <input type="number" class="form-control" id="Age" name = "Age">
            </div>
            <div class="col-12">
              <label for="Addrs" class="form-label">Address</label>
              <input type="text" class="form-control" id="Addrs" placeholder="1234 Main St" name = "Addrs">
            </div>
            <div class="col-md-6">
              <label for="City" class="form-label">City</label>
              <input type="text" class="form-control" id="City" name = "City">
            </div>
            
            <div class="col-md-2">
              <label for="Zip" class="form-label">Zip</label>
              <input type="number" class="form-control" id="Zip" name = "Zip">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            
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

