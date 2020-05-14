<?php
/**
 * The template for displaying Author info
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

$authors = get_multiple_authors();
?>
<div class="author-bio">
    <?php foreach ($authors as $author) : ?>
    <h2 class="author-title">
            <span class="author-heading">
                <?php
                printf(
                /* translators: %s: Post author. */
                    __('Published by %s', 'twentynineteen'),
                    esc_html($author->display_name)
                );
                ?>
            </span>
    </h2>
    <p class="author-description">
        <?php echo $author->description ?>
        <a class="author-link" href="<?php echo esc_url($author->link); ?>" rel="author">
            <?php _e('View more posts', 'twentynineteen'); ?>
        </a>
    </p><!-- .author-description -->
    <?php endforeach; ?>
</div><!-- .author-bio -->
