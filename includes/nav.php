 <ul class="nav-wrapper">
        <?php
        $urls = array (
            'Home' => '/',
            'About' => 'about.php',
            'Gustbook' => 'guestbook.php'
            
        );

        foreach ($urls as $name => $url) {
            echo '<li class="li-nav"><a class="a-nav" href ="'.$url.'">'.$name.'</a></li>';
        }

        ?>
 </ul>
 
