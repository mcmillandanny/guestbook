<section id="entries">

    <div class="entries-wrapper">
       
        
        <?php $result = mysqli_query($con, "SELECT name, message FROM entries"); 
            while($row = mysqli_fetch_array($result)) {
        ?> 
            <div class='entry'>
                <h3><?php echo $row['name'];?></h3>
                <p><?php echo $row['message'];?></p>
            </div>
            
        <?php } mysqli_close($con); ?>
        
    </div>
<section>
