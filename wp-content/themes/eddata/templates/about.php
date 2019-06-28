<?php

// The Query
$the_query = new WP_Query( array( 'post_type' => 'page' ) ); // un type de contenu

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
};

$data = [
    'title' => get_the_title(),
    'content' => get_the_content(),
    'illu' => get_the_post_thumbnail_url(),
];

$postData = json_encode($data);

?>

<about
    postdata="<?= htmlspecialchars($postData, ENT_QUOTES, 'UTF-8') ?>"
></about>

