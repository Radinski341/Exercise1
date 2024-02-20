<?php

wp_head();

?>

<nav id="site-navigation" class="main-navigation" role="navigation">
    <?php
        wp_nav_menu([
            'menu' => 'Main Nav',
            'menu_class' => 'primary-menu'
        ]);
    ?>
</nav>
