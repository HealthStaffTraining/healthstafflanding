<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title(' | ', true, 'right'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
<?php

 ?>       
    </head>
    <body <?php body_class(); ?>>
