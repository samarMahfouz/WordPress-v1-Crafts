<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php 
                wp_title('|', 'true', 'right');
                bloginfo('name');
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Start navigation section -->
        <nav class="navigation-bar">
            <div class="upper-nav">
                <div class="container">
                    <div class="row">
                        <div class="social-media col-md-6 col-sm-6">
                            <?php 
                                if(is_active_sidebar('sidebar1')){    
                                    dynamic_sidebar('sidebar1');
                                }
                            ?>
<!--
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-facebook fx"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter fx"></i></a></li>
                            </ul>
-->
                        </div> 
                        <?php 
                            wp_nav_menu(
                                array(
                                    'menu' => 'Primary',
                                    'container' => '',
                                    'theme_location' => 'Primary',
                                    'items_wrap' => '<ul class="links col-md-6 col-sm-6" id="">%3$s</ul>'
                                )
                            );
                        ?>
                    </div>
                </div>
           </div>
            <div class="main-nav">
                <a href="/wordpress/"><img class="text-center" src="<?php echo get_template_directory_uri() ?>/assets/images/img1.png" alt="logo"></a>
            </div>
        </nav>
        <!-- End navigation section -->