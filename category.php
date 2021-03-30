<?php
/**
 * Template Name: category page
 */
get_header(); 
?>
<!-- Start category page contents -->
<div class="designs shuffle-images">
    <div class="row">
<?php 
     if(have_posts() ){
        while(have_posts()){
            the_post();
            ?>
            <div class=" col-lg-4 col-md-6 col-xs-12 add-margin ">
    <a href="<?php the_permalink(); ?>">
                
            <?php the_post_thumbnail('medium', ['class' => 'img-responsive craft craft-design']); ?>
                </a>
            </div>
            <?php
        }
    }
      
?>
    </div>
</div>
<?php get_footer(); ?>