<?php 

    $host = "localhost"; //Add SQL Server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; // SQL Database Name

    $con = mysqli_connect($host, $user, $pass, $dbname);
    

    if (mysqli_connect_errno($con)) { //Check to see if we're cpnnected to the DB
        echo "<h1>Failed to Connect to MySQL:" . mysqli_connect_error() ."</h1>";
    }

    


   
        // var_dump($name); // Dump information about a variable to the view
    // print_r(); // does essentially the sane thing as var_dump
    // die; // This version of die simply kill the program at the point in the code where you declare it.
    // die($name); //THis version of die; allows you to kill the program AND pring the information about a variable.
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $sql = "INSERT INTO entries( name, phone, email, message) VALUES('$name', '$phone', '$email', '$message')";
    if  (!mysqli_query($con, $sql))
    {
        die('Error: ' .mysqli_query($con, $sql));
    }
    else {
       include 'thanks.php';
        mysqli_close($con);
    }
?>  
