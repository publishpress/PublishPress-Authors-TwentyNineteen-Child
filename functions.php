<?php

add_action('wp_enqueue_scripts', 'twentynineteenchildEnqueueStyles');
function twentynineteenchildEnqueueStyles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/**
 * Prints HTML with meta information about theme author.
 */
function twentynineteen_posted_by() {

    $authors = get_multiple_authors();
    $authorsNames = [];

    foreach ($authors as $author) {
        $authorsNames[] = sprintf(
            '<a class="url fn n" href="%s">%s</a>',
            esc_url($author->link),
            esc_html($author->display_name)
        );
    }

    printf(
    /* translators: 1: SVG icon. 2: Post author, only visible to screen readers. 3: Author link. */
        '<span class="byline">%1$s<span class="screen-reader-text">%2$s</span><span class="author vcard">%3$s</a></span></span>',
        twentynineteen_get_icon_svg( 'person', 16 ),
        __( 'Posted by', 'twentynineteen' ),
        implode(', ', $authorsNames)
    );
}
