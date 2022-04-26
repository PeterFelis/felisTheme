<?php wp_footer(); ?>



<footer>
    <div class='container'>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'topmenu'
            )
        )
        ?>
    </div>

</footer>
</body>

</html>