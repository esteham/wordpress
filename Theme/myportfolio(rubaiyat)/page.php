<?php get_header(); ?>

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-md-8">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile;
                endif;
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
