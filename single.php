<?php get_header(); ?>

<div class="section">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><small>Published on <?php the_date(); ?></small></p>
        <div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; else : ?>
        <p>No post found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
