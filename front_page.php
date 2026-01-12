<?php get_header(); ?>

<div class="section">
    <h2>About AC Milan</h2>
    <p>
        Associazione Calcio Milan, commonly known as AC Milan, is one of the most
        successful football clubs in history. Founded in 1899, the club is based
        in Milan, Italy.
    </p>
</div>

<div class="section">
    <h2>Club Highlights</h2>
    <ul>
        <li>Founded: 1899</li>
        <li>Stadium: San Siro</li>
        <li>Colors: Red & Black</li>
        <li>Nickname: Rossoneri</li>
    </ul>
</div>

<div class="section">
    <h2>Latest News</h2>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
    <?php
        endwhile;
    else :
        echo "<p>No posts found</p>";
    endif;
    ?>
</div>
<div class="section">
    <h2>Latest AC Milan News</h2>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="blog-post" style="margin-bottom:20px; padding:15px; border:1px solid #ddd; border-radius:6px; background:#fff;">
                <h3><a href="<?php the_permalink(); ?>" style="text-decoration:none; color:#b30000;"><?php the_title(); ?></a></h3>
                <p><small>Published on <?php the_date(); ?></small></p>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>" style="color:#b30000;">Read More</a></p>
            </div>
        <?php endwhile; ?>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'prev_text' => '« Prev',
                'next_text' => 'Next »',
            ));
            ?>
        </div>
<?php get_footer(); ?>
