


<?php get_header(); ?>

    <div class="main-container">

        <div class="col-2">

            <div class="boulangerie-main-content">

                <?php the_post();?>
                
            </div>

            <div class="boulangerie-sidebar">
                <?php get_sidebar(); ?>
            </div>

        </div>

    </div>

<?php    get_footer();