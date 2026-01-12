<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

<?php if ( have_comments() ) : ?>
    <h3 class="comments-title">
        <?php
        printf(
            _nx(
                'One Comment',
                '%1$s Comments',
                get_comments_number(),
                'comments title',
                'textdomain'
            ),
            number_format_i18n( get_comments_number() )
        );
        ?>
    </h3>

    <ol class="comment-list">
        <?php
        wp_list_comments( array(
            'style'      => 'ol',
            'short_ping' => true,
        ) );
        ?>
    </ol>

<?php endif; ?>

<?php comment_form(); ?>

</div>
