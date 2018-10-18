<?php 
/**
 * Set up Post variables to connect to Data Base
 */
?>



<?php 

    // var_dump($name); // Dump information about a variable to the view
    // print_r(); // does essentially the sane thing as var_dump
    // die; // This version of die simply kill the program at the point in the code where you declare it.
    // die($name); //THis version of die; allows you to kill the program AND pring the information about a variable.

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO entries(name, email, message) VALUES('$name', '$email', '$message')";

    if  (!mysqli_query($con, $sql))
    {
        die('Error: ' .mysqli_query($con));
    }
    else {
        echo "values Stored in our Database!";
        mysqli_close($con);
    }
    
?>