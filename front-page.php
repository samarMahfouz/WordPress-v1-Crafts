<?php get_header(); ?>
        
        <!-- Start header section -->
        <header>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.png" alt="main-image">
        </header>
        <!-- End header section -->
        
        <!-- Start trending section -->
        <section class="trending">
            <div class="container">
                <h2>Trending this week</h2>
                <div class="trending-content">
                    <div class="row">
                            <?php 
                                $populars =  array( 
                                    'posts_per_page' => 3, 
                                    'meta_key' => 'wpb_post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC');
                                $popularpost = new WP_Query($populars);
                                    if($popularpost->have_posts()){
                                        while($popularpost->have_posts()){
                                            $popularpost->the_post();
                                            ?>
                                       <div class=" col-lg-4 col-md-6 col-xs-12">
                                            <div class="content">
                                                <div class="image">
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>      
                                            </div>
                                            <h3 class="text-center"><?php the_title(); ?></h3>

                                        </div>
                                    </div>
                                <?php

                                        }
                                    }


                                ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End trending section -->
        
        <!-- Start crafts section -->
         <section class="crafts">
            <div class="container">
                <h2>Crafts</h2>
                <div class="crafts-content">
                    <div class="row">
                       <?php
                        $crafts = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'crafts',
                            'posts_per_page' => 4
                        );
                        $crafts_category = new WP_Query($crafts);
                         if($crafts_category->have_posts()){
                            while($crafts_category->have_posts()){
                                $crafts_category->the_post();
                        ?>
                        <div class=" col-md-6 col-sm-12 col-xs-12">
                            <div class="content">
                            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                            </div>
                        </div>
                        <?php
                            }
                           wp_reset_postdata(); 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End crafts section -->
        
        <!-- Start miniatures section -->
           <section class="miniature">
            <div class="container">
                <h2>Miniature</h2>
                <div class="miniature-content">
                    <div class="row">
                        <?php
                        $miniatures = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'miniature',
                            'posts_per_page' => 4
                        );
                        $miniatures_category = new WP_Query($miniatures);
                         if($miniatures_category->have_posts()){
                            while($miniatures_category->have_posts()){
                                $miniatures_category->the_post();
                        ?>
                        <div class=" col-md-6 col-sm-12 col-xs-12">
                            <div class="content">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                        </div>
                      <?php
                            }
                             wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End miniatures section -->
        
        <!-- Start latest articles section -->
        <section class="latest">
            <div class="container">
                <div class="latest-content">
                    <h2>The latest articles</h2>
                    <?php 
                        $latest_posts = array(
                            'posts_per_page' => 3
                        );
                        $latest = new WP_Query($latest_posts);
                        if($latest->have_posts()){
                            while($latest->have_posts()){
                                $latest->the_post();
                                ?>
                  
                    <div class="content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="row">
                            <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail col-md-4 col-xs-12']); ?>
                            <div class="col-md-8 col-xs-12">
                                <p class="lead"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">Read more</a>
                            </div>
                        </div>
                        <hr>
                    </div>
     
                      <?php
                            }
                           wp_reset_postdata(); 
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- End latest articles section -->
        
        <!-- Start footer section -->
        <footer>
            <div class="container">
                <div class="upper-footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'menu' => 'footer',
                                        'container' => '',
                                        'theme_location' => 'footer',
                                        'items_wrap' => '<ul class="footer-links" id="">%3$s</ul>'
                                    )
                                );
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <h2>Be my friend on:</h2>
                               <?php 
                                if(is_active_sidebar('sidebar2')){
                                    dynamic_sidebar('sidebar2');
                                }
                           ?>
<!--
                            <ul class="social-links">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">500px</a></li>
                                <li><a href="#">Devaint art</a></li>
                            </ul>
-->
                        </div>
                    </div>
                </div>
            </div>
    </footer>
<?php get_footer(); ?>