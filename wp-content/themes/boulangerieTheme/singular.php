<?php get_header(); ?>

    <div class="main-container">

        <div class="col-2">

            <div class="boulangerie-main-content">

                <?php
                    if ( have_posts() ) : 
                        while ( have_posts() ) : 
                            the_post();
                            the_title();
                            the_category();
                            the_content();


                        endwhile; 
                    endif; 
                ?>
            </div>

            <div class="boulangerie-sidebar">
                <?php get_sidebar(); ?>
            </div>

        </div>

    </div>

<?php    get_footer();