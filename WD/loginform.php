<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "WD";

        $conn = mysqli_connect($server, $username, $password, $db);
        if (!$conn){
        //     echo "success";
        // }
        // else{
            die("Error". mysqli_connect_error());
        }

    // include 'partials/_dbconnect.php';
    $Email = $_POST["Email"];
    $Pass = $_POST["Pass"]; 
    
     
    $sql = "Select * from users where Email='$Email' AND Pass='$Pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Email'] = $Email;
        header("location: update.php");

    } 
    else{
        echo "Invalid Credentials";
    }
}
    
?>