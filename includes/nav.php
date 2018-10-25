<ul>
     <?php
    $urls = array (
        'Home' => '/',
        'Gustbook' => 'guestbook.php'
    );

    foreach ($urls as $name => $url) {
        echo '<li><a href ="'.$url.'">'.$name.'</a></li>';
    }

     ?>
</ul>
