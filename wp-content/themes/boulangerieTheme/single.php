<?php get_header();?>
    <div class="main-container">
        <div class="col-2">
            <div class="boulangerie-main-content">
                <?php
                    if ( have_posts() ) : 
                        while ( have_posts() ) : 
                            the_post();
                ?>
                            <div class="post-title">
                                <h1><?php the_title();?></h1>                          
                                <div class="post-category">
                                    <?php the_category();?> 
                                </div>
                            </div>
                                <div class="boulangerie-post-img">
                                        <?php the_post_thumbnail([800, 500]); ?>
                                </div>
                            <div class="boulangerie-post-content">
                                <?php   the_content();?>
                            </div>
                <?php    endwhile; 
                    endif; 
                ?>
            </div>
            <div class="boulangerie-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php  get_footer();