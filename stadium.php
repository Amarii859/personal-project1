<?php
/*
Template Name: Stadium Page
*/
get_header();
?>

<div class="stadium-page">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="stadium-hero">
            <h1><?php the_title(); ?></h1>
        </section>

        <section class="stadium-content">
            <?php the_content(); ?>
        </section>

        <section class="stadium-info">
            <h2>Stadio San Siro</h2>
            <ul>
                <li><strong>Location:</strong> Milan, Italy</li>
                <li><strong>Opened:</strong> 1926</li>
                <li><strong>Capacity:</strong> 75,817</li>
                <li><strong>Home Teams:</strong> AC Milan & Inter Milan</li>
                <li><strong>Nickname:</strong> La Scala del Calcio</li>
            </ul>
        </section>

        <section class="stadium-comments">
            <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        </section>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
