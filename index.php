<?php get_header(); ?>

<!-- Hero / Banner with Club Logo -->
<section style="text-align:center; background:#000; padding:50px;">
    <a href="https://www.acmilan.com/" target="_blank">
        <!-- Replace this URL with your own uploaded logo if needed -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/ac-milan-logo.png" alt="AC Milan Logo" style="width:150px;">
    </a>
    <h1 style="color:#b30000; margin-top:20px;">Welcome to AC Milan Fansite</h1>
    <p style="color:white; font-size:18px;">Latest news, players, history & gallery</p>
</section>

<!-- Latest News / Blog Section -->
<section class="section">
    <h2>Latest AC Milan News</h2>

    <?php
    $args = array('posts_per_page' => 3);
    $latest_posts = new WP_Query($args);
    if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
            <div class="blog-post" style="margin-bottom:20px; padding:15px; border:1px solid #ddd; border-radius:6px; background:#fff;">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', ['style' => 'width:100%; height:auto; border-radius:6px;']);
                    } else { ?>
                        <img src="https://via.placeholder.com/800x400?text=AC+Milan+News" alt="AC Milan" style="width:100%; border-radius:6px;">
                    <?php } ?>
                </a>
                <h3><a href="<?php the_permalink(); ?>" style="color:#b30000;"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</section>

<!-- About AC Milan -->
<section class="section">
    
    <h2>About AC Milan</h2>
    <p>Milan has spent its entire history in Serie A with the exception of the 1980–81 and 1982–83 seasons.[11][12] Silvio Berlusconi’s 31-year tenure as Milan president was a standout period in the club's history, as they established themselves as one of Europe's most dominant and successful clubs. Milan won 29 trophies during his tenure, securing multiple Serie A and UEFA Champions League titles. During the 1991–92 season, the club notably achieved the feat of being the first team to win the Serie A title without losing a single game.[13] Milan is home to multiple Ballon d'Or winners, and three of the club's players, Marco van Basten, Ruud Gullit, and Frank Rijkaard, were ranked in the top three on the podium for the 1988 Ballon d'Or, an unprecedented achievement in the history of the prize.[14]AC Milan, founded in 1899, is one of the most successful football clubs in the world. Known for their iconic red and black kits, they have won 19 Serie A titles and 7 Champions League trophies.</p>
</section>

<!-- Players Gallery -->
<section class="section">
    <h2>Players Gallery</h2>
    <div style="display:flex; flex-wrap:wrap; gap:15px; justify-content:center;">
        <a href="https://acmilan.com/teams/men-first-team/roster" target="_blank">
            <img src="https://images.pexels.com/photos/11429618/pexels-photo-11429618.jpeg" alt="Player 1" style="width:220px; border-radius:8px;">
        </a>
        <a href="https://acmilan.com/teams/men-first-team/roster" target="_blank">
            <img src="https://images.pexels.com/photos/11429620/pexels-photo-11429620.jpeg" alt="Player 2" style="width:220px; border-radius:8px;">
        </a>
        <a href="https://acmilan.com/teams/men-first-team/roster" target="_blank">
            <img src="https://images.pexels.com/photos/11429619/pexels-photo-11429619.jpeg" alt="Player 3" style="width:220px; border-radius:8px;">
        </a>
    </div>
</section>

<!-- Trophies Section -->
<section class="section">
    <h2>Trophies & Achievements</h2>
    <p>Associazione Calcio Milan (Italian pronunciation: [assotʃatˈtsjoːne ˈkaltʃo ˈmiːlan]), commonly referred to as Milan or AC Milan (Italian pronunciation: [a tˌtʃi mˈmiːlan]) mainly outside of Italy,[6] is an Italian professional football club based in Milan, Lombardy. Founded in 1899, the club competes in the Serie A, the top tier of Italian football. In its early history, Milan played its home games in different grounds around the city before moving to its current stadium, the San Siro, in 1926.[7] The stadium, which was built by Milan's second chairman, Piero Pirelli, and has been shared with Inter Milan since 1947,[8] is the largest in Italian football, with a total capacity of 75,817.[9] The club has a long-standing rivalry with Inter, with whom they contest the Derby della Madonnina, one of the most followed derbies in football.[10]</p>
    <div style="display:flex; justify-content:center; gap:20px;">
        <img src="https://via.placeholder.com/200x200?text=Serie+A+Trophy" alt="Serie A Trophy">
        <img src="https://via.placeholder.com/200x200?text=Champions+League" alt="Champions League Trophy">
        <img src="https://via.placeholder.com/200x200?text=Club+World+Cup" alt="Club World Cup Trophy">
    </div>
</section>

<!-- Fan Gallery -->
<section class="section">
    <h2>Fan Moments</h2>
    <div style="display:flex; flex-wrap:wrap; gap:15px; justify-content:center;">
        <img src="https://images.pexels.com/photos/11429617/pexels-photo-11429617.jpeg" alt="Fans 1" style="width:200px; border-radius:8px;">
        <img src="https://images.pexels.com/photos/11429616/pexels-photo-11429616.jpeg" alt="Fans 2" style="width:200px; border-radius:8px;">
        <img src="https://images.pexels.com/photos/11429615/pexels-photo-11429615.jpeg" alt="Fans 3" style="width:200px; border-radius:8px;">
    </div>
</section>


    


<?php get_footer(); ?>

