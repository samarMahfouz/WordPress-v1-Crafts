<?php get_header(); ?>
<!-- Start categories page contents -->

<div class="designs shuffle-images">
    <div class="row">
<?php 
    if(have_posts() ){
        while(have_posts()){
            the_post();
            get_template_part('template-parts/content', 'archive');

        }
    }
?>
    </div>
</div>
<?php get_footer(); ?>