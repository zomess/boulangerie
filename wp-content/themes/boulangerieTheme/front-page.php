
<?php get_header(); ?>

<div class="main-container">
    <div class="second-container">
        <div class="boulangerie-content">
            <?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : 
                        the_post();
            ?> 
                    <div class="site-title">
                        <h1> La Boulangerie du Village </h1>
                    </div>
                    <?php echo do_shortcode('[metaslider id="82"]'); ?>
                    <div class="boulangerie-post-content">
                        <?php   the_content();?>
                    </div>
            <?php    
                    endwhile; 
                endif; 
            ?>
        </div>
    </div>
</div>
<?php get_footer();