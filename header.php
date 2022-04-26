<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <title><?php bloginfo('name') ?></title>

</head>

<body>

    <header class='header'>
        <div class='container'>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'topmenu'
                )
            );
            ?>
        </div>
    </header>