<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
            <?php
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary_menu'
                    )
                );
            }
            ?>
        </div>
    </header>