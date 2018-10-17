<?php include_once './header.php'?>
<?php include_once './includes/form.php'?>
<?php include_once './footer.php'?>

Hi <?php echo htmlspecialchars($_POST['name']); ?>.   
<p>Your Email is: <?php echo htmlspecialchars($_POST['email'])?></p>
<p>Your message is: <?php echo htmlspecialchars($_POST['message'])?></p>