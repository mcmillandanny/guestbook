<?php 
/**
 * Set up Post variables to connect to Data Base
 */

?>

<?php 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $sql = "INSERT INTO entries(name, email, message) VALUES('$name', '$email', '$message')";
?>