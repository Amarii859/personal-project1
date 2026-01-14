<?php get_header(); ?>

<div class="section">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <p><small>Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></small></p>

        <div class="post-content">
            <?php the_content(); ?>
        </div>

        <hr>

        <!-- COMMENTS / REPLIES -->
        <?php
        if (comments_open() || get_comments_number()) :
            comments_template(); // displays existing comments + reply form
        endif;
        ?>

    <?php endwhile; else : ?>
        <p>No post found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
