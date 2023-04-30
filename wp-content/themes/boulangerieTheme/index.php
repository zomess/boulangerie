
<?php get_header();?>

<div class="main-container">
    <div class="col-2">
        <div class="boulangerie-main-content">
        
                <?php if ( have_posts() ) : ?>        
                        <div class="section">
                                <?php   while ( have_posts() ) : ?>
                                        <div class="posts">
                                                <?php the_post();?>                                         
                                                <h2> <a href="<?php the_permalink() ?>" class="blog-title"><?php the_title(); ?></a></h2>
                                                <div class="boulangerie-post-medium">
                                                        <?php the_post_thumbnail('medium'); ?>
                                                </div>
                                                <div class="boulangerie-post-excerpt">
                                                        <?php the_excerpt('En voir plus');  ?>
                                                </div>
                                                <a href="<?php the_permalink() ?>" class="boulangerie-voir-plus">Voir plus</a>
                                        </div>
                                <?php endwhile; ?>
                        </div>
                <?php endif; ?>
        </div>
        
        <div class="boulangerie-sidebar">
                <?php get_sidebar();?>
        </div>
    </div>
</div> 

<?php get_footer();