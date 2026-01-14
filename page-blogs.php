<?php
/* Template Name: Blog Page */
get_header();

// --- HANDLE BLOG SUBMISSION ---
if (isset($_POST['submit_blog'])) {

    if (!isset($_POST['blog_nonce']) || !wp_verify_nonce($_POST['blog_nonce'], 'add_blog')) {
        die('Security check failed');
    }

    $post_title   = sanitize_text_field($_POST['post_title']);
    $post_content = wp_kses_post($_POST['post_content']);

    $new_post = array(
        'post_title'   => $post_title,
        'post_content' => $post_content,
        'post_status'  => 'publish', // or 'draft' if you want admin approval
        'post_type'    => 'post',
        'post_author'  => get_current_user_id() // optional, only for logged-in users
    );

    $post_id = wp_insert_post($new_post);

    if ($post_id) {
        echo '<p style="color:green;">Blog added successfully!</p>';
    }
}
?>

<!-- --- ADD BLOG FORM --- -->
<div class="section">
    <h2>Add New Blog</h2>

    <form method="post" action="">
        <?php wp_nonce_field('add_blog', 'blog_nonce'); ?>

        <p>
            <label for="post_title">Title</label><br>
            <input type="text" id="post_title" name="post_title" style="width:100%; padding:10px;" required>
        </p>

        <p>
            <label for="post_content">Content</label><br>
            <textarea id="post_content" name="post_content" rows="8" style="width:100%; padding:10px;" required></textarea>
        </p>

        <p>
            <button type="submit" name="submit_blog">Publish Blog</button>
        </p>
    </form>
</div>

<hr>

<!-- --- LIST BLOGS WITH COMMENTS --- -->
<div class="section">
    <h2>AC Milan Blog</h2>

    <?php
    $blog_query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'post_status'    => 'publish'
    ));

    if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
    ?>
            <div class="blog-post" style="margin-bottom:40px; border:1px solid #ddd; padding:15px; border-radius:5px;">
                <h3><?php the_title(); ?></h3>
                <p><small>Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></small></p>
                <div><?php the_content(); ?></div>

                <!-- COMMENTS / REPLIES -->
                <?php
                if (comments_open()) :
                    comment_form(array(
                        'title_reply'           => 'Reply to this blog',
                        'comment_notes_before'  => '',
                        'comment_notes_after'   => '',
                        'label_submit'          => 'Post Reply'
                    ), get_the_ID());
                endif;

                // Display existing comments
                $comments = get_comments(array('post_id' => get_the_ID()));
                if ($comments) :
                    echo '<h4>Replies:</h4><ul class="comment-list">';
                    wp_list_comments(array(
                        'per_page' => 10,
                        'reverse_top_level' => false
                    ), $comments);
                    echo '</ul>';
                endif;
                ?>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
