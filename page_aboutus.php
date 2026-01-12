<?php
/* Template Name: About Us */
get_header(); 
?>

<!-- Hero Banner -->
<section style="text-align:center; background:#b30000; color:white; padding:50px;">
    <h1>About AC Milan</h1>
    <p>Learn more about the history, players, achievements, and fans of AC Milan</p>
</section>

<!-- Display content from WordPress editor -->
<section class="section">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content(); // Shows content from editor
        endwhile;
    endif;
    ?>
</section>

<!-- Club History Timeline -->
<section class="section">
    <h2>Club History</h2>
    <ul style="list-style:none; padding:0;">
        <li><strong>1899:</strong> AC Milan founded</li>
        <li><strong>1901:</strong> First Italian championship</li>
        <li><strong>1963:</strong> First European Cup victory</li>
        <li><strong>1988-1994:</strong> Legendary European era</li>
        <li><strong>2003-2007:</strong> Champions League victories</li>
    </ul>
</section>

<!-- Stadium Info -->
<section class="section">
    <h2>Stadium - San Siro</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/3/30/San_Siro_Stadium.jpg" alt="San Siro Stadium" style="width:100%; max-width:800px; border-radius:8px;">
    <p>San Siro, officially Stadio Giuseppe Meazza, is AC Milan's iconic home stadium. Capacity: 80,018. Shared with Inter Milan.</p>
</section>

<!-- Famous Players -->
<section class="section">
    <h2>Famous Players</h2>
    <div style="display:flex; flex-wrap:wrap; gap:15px; justify-content:center;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/Paolo_Maldini_2011.jpg" alt="Paolo Maldini" style="width:200px; border-radius:8px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1f/Franco_Baresi.jpg" alt="Franco Baresi" style="width:200px; border-radius:8px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Andriy_Shevchenko_2011.jpg" alt="Andriy Shevchenko" style="width:200px; border-radius:8px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Kak%C3%A1_2007-08.jpg" alt="Kaká" style="width:200px; border-radius:8px;">
    </div>
</section>

<!-- Achievements -->
<section class="section">
    <h2>Achievements & Trophies</h2>
    <ul>
        <li>Serie A Titles: 19</li>
        <li>Coppa Italia: 5</li>
        <li>Champions League Titles: 7</li>
        <li>Supercoppa Italiana: 7</li>
        <li>FIFA Club World Cup: 1</li>
    </ul>
</section>

<!-- Fan Community -->
<section class="section">
    <h2>Fan Community</h2>
    <p>AC Milan has millions of fans worldwide. Join our community to discuss matches, share photos, and celebrate the Rossoneri together!</p>
    <div style="display:flex; flex-wrap:wrap; gap:10px; justify-content:center;">
        <img src="https://images.pexels.com/photos/11429617/pexels-photo-11429617.jpeg" alt="Fans 1" style="width:200px; border-radius:8px;">
        <img src="https://images.pexels.com/photos/11429616/pexels-photo-11429616.jpeg" alt="Fans 2" style="width:200px; border-radius:8px;">
        <img src="https://images.pexels.com/photos/11429615/pexels-photo-11429615.jpeg" alt="Fans 3" style="width:200px; border-radius:8px;">
    </div>
</section>

<?php get_footer(); ?>
