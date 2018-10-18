<?php 
/**
 * Sets up connection to our local database running in MAMP
 */

?>

<?php 

    $host = "localhost"; //Add SQL Server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; // SQL Database Name

    $con = mysqli_connect($host, $user, $pass, $dbname);
    

    if (mysqli_connect_errno($con)) { //Check to see if we're cpnnected to the DB
        echo "Failed to Connect to MySQL:" . mysqli_connect_error();
    }
?>