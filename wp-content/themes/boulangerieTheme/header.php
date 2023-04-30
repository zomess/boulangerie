<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boulangerie</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="topbar">
        <div class="topbar-phone"><i class="fa fa-phone" aria-hidden="true"></i> 0033 666 999 123</div>
        <div class="topbar-ad"><i class="fa fa-map-marker" aria-hidden="true"></i> 02 Rue de la liberté, 15000 Tizi Ouzou</div>
    </div>

    <div class="container">
        <div class="header">
            <div class="headerLogo">
                <?php if(function_exists('the_custom_logo')){
                the_custom_logo();
                }?>
            </div>            
            <div class="headerMenu">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
        </div>            
    </div>
    
    
