<!-- Start article content section -->
<div class="article-content">
    <div class="container">
        <?php cw_set_post_views(get_the_ID());?>
        <h1><?php  the_title(); ?></h1>
        <span class="edit-post">
            <?php edit_post_link('Edit the post', '<i class="fa fa-pencil"></i>'); ?>
        </span>
   
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-4 col-sm-12">
                       <div class="row">
                        
                            <div class="about col-lg-12 col-xs-12">
                                <h2>About the design</h2>
                                <p>Designer: <?php the_author(); ?></p>
                                <p>Date: <?php the_date(); ?></p>
                                <p>Category: <?php the_category(' '); ?></p>
                                <p>Comments: <?php comments_number(); ?></p>
                            </div>
                      
                           
                       </div>
                    </div>
                
          
                    
                </div>
                
                            <div class="clearfix"></div>
                             <?php comments_template() ?>
                   
            </div>
        </div>
        <!-- End article content section -->
