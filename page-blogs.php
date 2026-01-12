<?php
/* Template Name: Blog Page */
get_header(); ?>

<div class="section">
    <h2>AC Milan Blog</h2>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="blog-post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile;
    else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
