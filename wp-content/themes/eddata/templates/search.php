<?php

$args = array(
    'posts_per_page' => -1,
    's' => get_search_query(),
    'orderby' => 'date'
  );

$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

$postData = [
    'title' => get_the_title(),
    'link' => get_the_permalink()
]
?>

<h1><post-thumbnail postdata='<?= json_encode($postData) ?>'></post-thumbnail></h1>

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>