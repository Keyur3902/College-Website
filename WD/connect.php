<?php
    if(isset($_POST['Email'])){

    
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "WD";

    $conn = new mysqli($server, $username, $password, $db) or die("Unable to connect");

    
    //echo"great work";
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
    // $Dt = $_POST['Dt'];
    
    $sql="INSERT INTO users (FirstName, LastName, Email, Pass, Phone, Gender, Age, Addrs, City, Zip) VALUES ('$FirstName', '$LastName', '$Email', '$Pass', '$Phone', '$Gender', '$Age', '$Addrs', '$City', '$Zip')";
    if($conn -> query($sql) == TRUE){
        header("location:update.php");
        //echo "successfully Inserted";

    }
    else{
        echo "Error: $sql <br> $conn->error";
    }

    $conn->close();
  }
?>
