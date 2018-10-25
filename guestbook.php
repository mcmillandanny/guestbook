<?php include_once ('./header.php');?>

<?php

    $host = "localhost"; //Add SQL Server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; // SQL Database Name

    $con = mysqli_connect($host, $user, $pass, $dbname);

?>

    <div class="container">
        <div class="row">
        <?php $result = mysqli_query($con, "SELECT name, lastName, phone, message FROM entries"); 
            while($row = mysqli_fetch_array($result)) { ?> 
            <?php include './includes/entries.php' ?>
         <?php } mysqli_close($con); ?>
        </div>
    </div>


<p><?php echo "I am the GuestBook!"?></p>
<?php include_once ('./footer.php');?>